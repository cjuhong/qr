<?php

require_once(dirname(__FILE__).'/../lib/fileuploadGeneratorConfiguration.class.php');
require_once(dirname(__FILE__).'/../lib/fileuploadGeneratorHelper.class.php');

/**
 * fileupload actions.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage fileupload
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: actions.class.php 31002 2010-09-27 12:04:07Z Kris.Wallsmith $
 */ 
class fileuploadActions extends autoFileuploadActions
{
public function executeUpload(sfWebRequest $request){
    $form=new FileUploadForm();
    $form->bind($request->getParameter('uploadfile'),$request->getFiles('uploadfile'));
    if($form->isValid()){
     $file=$form->getValue('filename0');
//     $file->save($file->getPath().'/'.$file->generateFilename());
//     $file->save();
//    上面两句的效果是一样的，上传到服务器上的文件名类似MD5后的字符。
//     echo $file->getOriginalExtension(); 获取上传文件的扩展名
		$file->save($file->getPath().'/'.$file->getOriginalName()); //上传后的文件名为原始文件名，路径中若某个文件夹不存在便自动生成。  



		
		
      $this->getUser()->setFlash('notice', 'The file was upload successfully.');
		$fileupload=new FileUpload();	
		$fileupload['file_name']=$file->getOriginalName();
		$fileupload['file_size']=$file->getSize();

		$fileupload->save();
		$this->redirect('@file_upload');
   
    }
    else 
      echo $form['filename0']->getError();


	$this->form=new FileUploadForm();
    // sorting
    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();
}

/*------------------------------------------------------------------------------------------------------*/
public function executeUpload2(sfWebRequest $request){
				$module2=$request->getParameter('module2');
				$id=$request->getParameter('uid');;
				$remark=$request->getParameter('remark');

		        $uploadDir = sfConfig::get("sf_upload_dir");
				if(!$module2)
		        $Contacts_uploads = $uploadDir.'/contacts_uploads';
				else
		        $Contacts_uploads = $uploadDir.'/'.$module2;
				
		        if(!is_dir($Contacts_uploads))
		            mkdir($Contacts_uploads, 0777);  

			   $upload_path='http://'.$request->getHost().sfConfig::get('app_upload_path_file_upload').$module2;
			foreach ($request->getFiles() as $fileName) {

		        $fileSize = $fileName['size'];
		        $fileType = $fileName['type'];
		        $theFileName = $fileName['name'];       
			if($fileSize < 64*1024*1024){
				if($fileSize>1024){
					$fileSize=$fileSize/1024;
						if($fileSize>1024){
							$fileSize=$fileSize/1024;
							$fileSize=number_format($fileSize,1);
							$fileSize=$fileSize.' M';
							}else{
							$fileSize=number_format($fileSize,1);
							$fileSize=$fileSize.' KB';
							}
					}else{
							$fileSize=number_format($fileSize,1);
							$fileSize=$fileSize.' B';
				}
		        if(move_uploaded_file($fileName['tmp_name'], "$Contacts_uploads/$theFileName"))
				{	
				$fileupload=new FileUpload();	
				$fileupload['file_name']=$fileName['name'];
				$fileupload['file_size']=$fileSize;
				$fileupload['module']=$module2;
				$fileupload['parent_id']=$id;
				$fileupload['remark']=$remark;
				$fileupload['path']=$upload_path.'/'.$fileName['name'];
				$fileupload->save();
     			 $this->getUser()->setFlash('notice', 'Upload successfully.');	


				$moduleName = sfContext::getInstance()->getModuleName();
				$recordid = $id;
				  $data = array($recordid, $moduleName.'.'.$module2.'.upload file ='.$theFileName);
				$event = new sfEvent($this, 'log', array('recordid' =>$recordid ));
				$event->setReturnValue($data);
				$this->dispatcher->notify($event);


				}else
     			 $this->getUser()->setFlash('error', 'Upload failed.');	
			}else{
				
     			 $this->getUser()->setFlash('error', 'The file size too large.');		
				}

		    }

		$this->redirect('@file_upload?module2='.$request->getParameter('module2').'&uid='.$request->getParameter('uid'));

/*
	$f=$request->getFiles('filename');
			$sf= new sfValidatedFile($f['name'],$f['type'],$f['tmp_name'],$f['size']);
			echo $sf->getOriginalExtension();//扩展名
			$sf->save(sfConfig::get('sf_upload_dir').'/file'.'/'.$fname);//存图片
*/
    // sorting
    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }else{
		$this->setSort(array('id', 'desc'));
	}

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }
	$this->module2 = $request->getParameter('module2');
	$this->uid = $request->getParameter('uid');

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();

}



/*------------------------------------------------------------------------------------------------------*/
  public function preExecute()
  {
    $this->configuration = new fileuploadGeneratorConfiguration();

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($this->getActionName())))
    {
      $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
    }

    $this->dispatcher->notify(new sfEvent($this, 'admin.pre_execute', array('configuration' => $this->configuration)));

    $this->helper = new fileuploadGeneratorHelper();

    parent::preExecute();
  }

/*------------------------------------------------------------------------------------------------------*/
  public function executeIndex(sfWebRequest $request)
  {
	if(!$this->getUser()->hasCredential('create_user'))
      {
        $this->redirect('@homepage');
      }

	$this->form=new FileUploadForm();
    // sorting
    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }else{
		$this->setSort(array('id', 'desc'));
	}


    $this->setPage(1);

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }
	$this->module2 = $request->getParameter('module2');
	$this->uid = $request->getParameter('uid');
	$this->name = $request->getParameter('name');
	$this->remark=$request->getParameter('remark');

	if($this->module2&&$this->uid){
	$table=$this->module2;
    $this->objects=Doctrine::getTable($table)->findOneById($this->uid);
    $this->pager = $this->getPager2($this->uid,$this->module2);
	}else{
    $this->pager = $this->getPager();
	}
    $this->sort = $this->getSort();
  }


  public function executeFilter(sfWebRequest $request)
  {
    $this->setPage(1);

    if ($request->hasParameter('_reset'))
    {
      $this->setFilters($this->configuration->getFilterDefaults());

      $this->redirect('@file_upload');
    }

    $this->filters = $this->configuration->getFilterForm($this->getFilters());

    $this->filters->bind($request->getParameter($this->filters->getName()));
    if ($this->filters->isValid())
    {
      $this->setFilters($this->filters->getValues());

      $this->redirect('@file_upload');
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();

    $this->setTemplate('index');
  }

  public function executeNew(sfWebRequest $request)
  {
        if(!$this->getUser()->hasCredential('create_user'))
      {
        $this->redirect('@homepage');
      }
    $this->form = $this->configuration->getForm();
    $this->file_upload = $this->form->getObject();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->file_upload = $this->form->getObject();

    $this->processForm($request, $this->form);

    $this->setTemplate('index');
  }

  public function executeEdit(sfWebRequest $request)
  {
        if(!$this->getUser()->hasCredential('create_user'))
      {
        $this->redirect('@homepage');
      }
	$this->file_upload = $this->getRoute()->getObject();
//    $this->form = $this->configuration->getForm($this->file_upload);
        $this->redirect($this->file_upload->getPath());
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->file_upload = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->file_upload);

    $this->processForm($request, $this->form);

    $this->setTemplate('index');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();
				$module2=$this->getRoute()->getObject()->getModule();
				$id=$this->getRoute()->getObject()->getParentId();

    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

    if ($this->getRoute()->getObject()->delete())
    {
      $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
    }

		$this->redirect('@file_upload?module2='.$module2.'&uid='.$id);
  }

  public function executeBatch(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    if (!$ids = $request->getParameter('ids'))
    {
      $this->getUser()->setFlash('error', 'You must at least select one item.');

      $this->redirect('@file_upload');
    }

    if (!$action = $request->getParameter('batch_action'))
    {
      $this->getUser()->setFlash('error', 'You must select an action to execute on the selected items.');

      $this->redirect('@file_upload');
    }

    if (!method_exists($this, $method = 'execute'.ucfirst($action)))
    {
      throw new InvalidArgumentException(sprintf('You must create a "%s" method for action "%s"', $method, $action));
    }

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($action)))
    {
      $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
    }

    $validator = new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'FileUpload'));
    try
    {
      // validate ids
      $ids = $validator->clean($ids);

      // execute batch
      $this->$method($request);
    }
    catch (sfValidatorError $e)
    {
      $this->getUser()->setFlash('error', 'A problem occurs when deleting the selected items as some items do not exist anymore.');
    }

    $this->redirect('@file_upload');
  }

  protected function executeBatchDelete(sfWebRequest $request)
  {
    $ids = $request->getParameter('ids');

    $records = Doctrine_Query::create()
      ->from('FileUpload')
      ->whereIn('id', $ids)
      ->execute();

    foreach ($records as $record)
    {
      $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $record)));

      $record->delete();
    }

    $this->getUser()->setFlash('notice', 'The selected items have been deleted successfully.');
    $this->redirect('@file_upload');
  }


  protected function getFilters()
  {
    return $this->getUser()->getAttribute('fileupload.filters', $this->configuration->getFilterDefaults(), 'admin_module');
  }

  protected function setFilters(array $filters)
  {
    return $this->getUser()->setAttribute('fileupload.filters', $filters, 'admin_module');
  }

  protected function getPager()
  {
    $pager = $this->configuration->getPager('FileUpload');
    $pager->setQuery($this->buildQuery());
    $pager->setPage($this->getPage());
    $pager->init();

    return $pager;
  }

  protected function getPager2($id,$module)
  {
    $pager = $this->configuration->getPager('FileUpload');
    $pager->setQuery($this->buildQuery2($id,$module));
    $pager->setPage($this->getPage());
    $pager->init();

    return $pager;
  }
  protected function setPage($page)
  {
    $this->getUser()->setAttribute('fileupload.page', $page, 'admin_module');
  }

  protected function getPage()
  {
    return $this->getUser()->getAttribute('fileupload.page', 1, 'admin_module');
  }

  protected function buildQuery2($id,$module)
  {
    $tableMethod = $this->configuration->getTableMethod();
    if (null === $this->filters)
    {
      $this->filters = $this->configuration->getFilterForm($this->getFilters());
    }

    $this->filters->setTableMethod($tableMethod);

    $query = $this->filters->buildQuery($this->getFilters());
      $query->andwhere('parent_id = ?',$id);
      $query->andwhere('module = ?',$module);
		
    $this->addSortQuery($query);

    $event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_query'), $query);
    $query = $event->getReturnValue();

    return $query;
  }

  protected function buildQuery()
  {
    $tableMethod = $this->configuration->getTableMethod();
    if (null === $this->filters)
    {
      $this->filters = $this->configuration->getFilterForm($this->getFilters());
    }

    $this->filters->setTableMethod($tableMethod);

    $query = $this->filters->buildQuery($this->getFilters());

    $this->addSortQuery($query);

    $event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_query'), $query);
    $query = $event->getReturnValue();

    return $query;
  }

  protected function addSortQuery($query)
  {
    if (array(null, null) == ($sort = $this->getSort()))
    {
      return;
    }

    if (!in_array(strtolower($sort[1]), array('asc', 'desc')))
    {
      $sort[1] = 'asc';
    }

    $query->addOrderBy($sort[0] . ' ' . $sort[1]);
  }

  protected function getSort()
  {
    if (null !== $sort = $this->getUser()->getAttribute('fileupload.sort', null, 'admin_module'))
    {
      return $sort;
    }

    $this->setSort($this->configuration->getDefaultSort());

    return $this->getUser()->getAttribute('fileupload.sort', null, 'admin_module');
  }

  protected function setSort(array $sort)
  {
    if (null !== $sort[0] && null === $sort[1])
    {
      $sort[1] = 'asc';
    }

    $this->getUser()->setAttribute('fileupload.sort', $sort, 'admin_module');
  }

  protected function isValidSortColumn($column)
  {
    return Doctrine_Core::getTable('FileUpload')->hasColumn($column);
  }


  public function processForm(sfWebRequest $request, sfForm $form)
  {
    $moduleName = sfContext::getInstance()->getModuleName();
    $recordid = $request->getParameter('id');
    if($form->getObject()->isNew())
      {
        $data = array($recordid, $moduleName.'.new');
      }else{
      $data = array($recordid, $moduleName.'.edit');
    }
    $event = new sfEvent($this, 'log', array('recordid' =>$recordid ));
    $event->setReturnValue($data);
    $this->dispatcher->notify($event);

    $URL=sfConfig::get('app_cachepath')."APICache.php?flush=1&module=".$moduleName;
    $ch = curl_init($URL);
    curl_exec($ch);
    curl_close($ch);

    parent::processForm($request, $form);
  }

}

