<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
  <p class="t cent botli"><?=$tstr[$do];?></p>
  <form action="api/edit.php" method="post" enctype="multipart/form-data">
    <table width="100%">
      <tbody>
        <tr class="yel">
          <td width="45%">主選單名稱</td>
          <td width="25%">選單連結網址</td>
          <td width="7%">次選單數</td>
          <td width="7%">顯示</td>
          <td width="7%">刪除</td>
          <td></td>
        </tr>
        <?php 
        $rows=$Menu->all(['parent'=>0]);
        foreach ($rows as $key => $row) { ?>
          <tr>
          <td><input type="text" name="text[]" value="<?=$row['text'];?>"></td>
          <td><input type="text" name="href[]" value="<?=$row['href'];?>"></td>
          <td class="cent"><?=$Menu->count(['parent'=>$row['id']])?></td>
          <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?> ></td>
          <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>" id=""></td>
          <input type="hidden" name="id[]" value="<?=$row['id'];?>" id="">
          <td><input type="button" value="編輯次選單" onclick="op('#cover','#cvr','./modal/subtit.php?do=<?=$do;?>&id=<?=$row['id'];?>')"></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
      <tbody>
        <tr>
          <input type="hidden" name="table" value="<?=$do;?>" id="">
          <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?do=<?=$do;?>')" value="新增主選單">
          </td>
          <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>