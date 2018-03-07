<?php
namespace App\Domain;

/**
 * 视频接口域
 *
 * @author Meroc Chen <398515393@qq.com> 2018-02-23
 */
class VideoDm {

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

}
