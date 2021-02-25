<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
  <p class="t cent botli"><?=$tstr[$do];?></p>
  <form action="api/edit.php" method="post" enctype="multipart/form-data">
    <table style="margin:auto;">
      <tbody>
        <tr class="yel">
          <td>頁尾版權資料:</td>
          <td><input type="text" name="bottom" value="<?=$Bottom->find(1)['bottom'];?>"></td>
        </tr>
        <tr>
          <input type="hidden" name="id[]" value="1">
          <input type="hidden" name="table" value="<?=$do;?>">
          <td colspan="2" class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>
    
        </tr>
      </tbody>
    </table>

  </form>
</div>