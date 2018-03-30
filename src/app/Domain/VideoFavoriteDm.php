<?php
namespace App\Domain;

/**
 * 喜欢的视频处理域
 */
class VideoFavoriteDm {

  public function addUserFavorVideo($params) {
  
    return \App\request('App.VideoFavorite.AddUserFavorVideo', $params);
  
  }

  public function cancelUserFavorVideo($params) {
  
    return \App\request('App.VideoFavorite.CancelUserFavorVideo', $params);
  
  }

}
