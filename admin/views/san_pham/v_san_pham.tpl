<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Loại sản phẩm</th>
          <th>Ngày nhập</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> {$lst} </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        {foreach $san_pham as $sp}
        <tr>
          <td><input type="checkbox" /></td>
          <td>{$sp->ProductID}</td>
          <td><a href="sua_san_pham.php?ProductID={$sp->ProductID}" title="Edit">{$sp->ProductName}</a></td>
          <td>{$sp->ProductType}</td>
          <td>{$sp->LastUpdate}</td>
          <td><!-- Icons --> 
            <a href="sua_san_pham.php?ProductID={$sp->ProductID}" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <!--xoa_san_pham.php?ProductID={$sp->ProductID}-->
            <a href="xoa_san_pham.php?ProductID={$sp->ProductID}" title="Delete" onclick="return Xoa_san_pham({$sp->ProductID})" "> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        {/foreach}
        <div  class="pagination" style="clear:both; text-align:center">{$lst}</div>
      </tbody>
    </table>
   
  </div>
  
</div>
<script>
function Xoa_san_pham(ProducID)
{
	
	if(confirm('Bạn xóa sản phẩm ?'))
	{
		window.location="xoa_san_pham.php?ProductID="+ProductID;
	}
    window.location="xoa_san_pham.php?ProductID="+ProductID;
}
</script>
