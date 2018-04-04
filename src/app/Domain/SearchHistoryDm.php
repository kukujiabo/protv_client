<?php
namespace App\Domain;

/**
 * 查询搜索历史
 */
class SearchHistoryDm {

  /**
   * 添加用户搜索历史
   */
  public function addMemberSearchHistory($params) {
  
    return \App\request('App.SearchHistory.AddMemberSearchHistory', $params); 
  
  }

  /**
   * 获取用户搜索历史
   */
  public function getMemberSearchHistory($params) {
  
    return \App\request('App.SearchHistory.GetMemberSearchHistory', $params);
  
  }

  public function remove($params) {
  
    return \App\request('App.SearchHistory.Remove', $params);
  
  }

  public function removeAll($params) {
  
    return \App\request('App.SearchHistory.RemoveAll', $params);
  
  }


}
