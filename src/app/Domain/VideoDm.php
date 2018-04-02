<?php
namespace App\Domain;

use App\Library\RedisClient;

/**
 * 视频接口域
 *
 * @author Meroc Chen <398515393@qq.com> 2018-02-23
 */
class VideoDm {

  protected $_member;

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  /**
   * 添加视频
   */
  public function addVideo($data) {
  
    return \App\request('App.Video.AddVideo', $data);
  
  }

  /**
   * 编辑视频
   */
  public function editVideo($data) {
  
    return \App\request('App.Video.EditVideo', $data);
  
  }

  /**
   * 列表查询
   */
  public function listQuery($data) {
  
    return \App\request('App.Video.listQuery', $data);
  
  }

  /**
   * 视频详情
   */
  public function detail($data) {

    $data['uid'] = $this->_member->id;
  
    return \App\request('App.Video.Detail', $data);
  
  }

  public function getUserCollectVideos($params) {

    $data['uid'] = $this->_member->id;
  
    return \App\request('App.Video.GetUserCollectVideos', $data);
  
  
  }

}
