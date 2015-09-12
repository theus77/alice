<?php
class ApertureController extends AppController {
	
	public $uses = array('ApertureConnector.Folder');
	
	public function galerie($uuid) {		
		$decodedProjectUuid = $this->Folder->decodeUuid($uuid);
		
		$options = array(
			'contain' => array(
				'Version' => array(
					'conditions' => array(
						'Version.showInLibrary' => 1,
						'Version.isHidden' => 0,
						'Version.isInTrash' => 0,
						'Version.mainRating >=' => 0
					)
				)
			),
			'fields' => array('Folder.name'),
			'conditions'=> array(
					'uuid' => $decodedProjectUuid,
					'folderType' => 2, //is a project folder
			),
		);
		
		$project = $this->Folder->find('first', $options);
		
		if($project){
			
				$this->set(compact('project'));
				$this->set('_serialize', array('project'));
				//$this->response->cache('-1 minute', '+5 days');
				
// 				print_r($project);
// 				exit;
		}
		else{
			throw new NotFoundException();
		}
	}

}