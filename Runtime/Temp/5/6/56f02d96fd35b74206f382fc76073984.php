<?php
//000000000000s:918:"SELECT SQL_CALC_FOUND_ROWS t1.id as id,CONCAT('<img style="vertical-align:middle" src="Skin/Admin/Img/page_white_un.png" />',' <span style="vertical-align:middle">',t1.title) as title,t2.client_id as client_id,t2.views as views,t1.user_id as user_id,t1.edit_id as edit_id,t1.type as type,t1.pro_id as pro_id,t3.username as username,t1.addtime as addtime,t4.path as path,concat('<a href="javascript:onExcel(',t1.id,')" class="font1_color">导出WORD</a>&nbsp;&nbsp;&nbsp;<a href="javascript:toEditFiles(',t1.id,')" class="font1_color">编辑</a>&nbsp;&nbsp;&nbsp;<a href="javascript:toDelFiles(',t1.id,')" class="font1_color">刪除</a>') as action FROM dwin_files_table as t1 LEFT JOIN  dwin_project_table as t2 on t2.id = t1.pro_id LEFT JOIN  dwin_user_table as t3 on t3.id = t1.edit_id LEFT JOIN  dwin_files_path_table as t4 on t4.files_id = t1.id HAVING id>0  and pro_id=3 ORDER BY type asc,addtime desc LIMIT 0,9  ";
?>