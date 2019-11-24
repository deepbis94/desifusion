<?php 


	function cartElement($productname,$productprice,$productimage,$productid,$count,$cate){
		$str = "
  <div class='card'>
     <div class=\"row\">
       <div class=\"col-lg-3\">
        <img src='$productimage' style=\"width:100%;height:140px;margin-top:4px;margin-left:9px\">         
       </div>
       <div class=\"col-lg-6\" style='padding-top:7px'>
          <h3>&nbsp;$productname</h3>
          <p>&nbsp;$cate</p>

<div class=\"def-number-input number-input safari_only\">
  <button class=\"minus\" onclick=\"fundown(this.parentNode.querySelector('input[type=number]'),$productid)\"></button>
  <input class=\"quantity\" min=\"0\" name=\"quantity\" type=\"number\" value='$count'>
  <button class=\"plus\" onclick=\"funup(this.parentNode.querySelector('input[type=number]'),$productid)\"></button>
</div>
       </div>
       <div class=\"col-lg-3\" style='padding-top:7px'>
          <h4>
          <b>&#8377;$productprice</b>
          &nbsp;
          <s style='font-size:17px'>&#8377;200</s>
          <br>
          <span style='font-size:17px;color:green'>20% Off</span>
          </h4>
     <form method='post' action='cart.php?act=remove&id=$productid'>
         <button class=\"btn btn-danger\" type='submit' name='remove'>x</button>
       </form>
       </div>
     </div>
    <div>

    </div>
  </div>
<br/>
		";
		echo $str;
	}
  function cartElement2($productname,$productprice,$productimage,$productid,$count,$cate,$sp){


    $str = "
      <div class='cart-item'>
        <div class='item-content'>
        <img src='$productimage'>
        <div class='desc'>
          <h1>$productname</h1><br>
          <span>$cate</span>
        </div>
        <div class='pro-number'>
          <span id='num_$productid'>$count</span>
        </div>
        <div class='pro-number-button'>
          <button onclick='funUp($count,$productid);'>+</button>
          <button onclick='funDown($count,$productid);'>-</button>
        </div>
        <div class='item-price'>
          <h1>&#8377;$sp &nbsp;<span id='disc'><s>&#8377;$productprice</s></span></h1>
        </div>
        </div>
        <div class='item-delete'>
     <form method='post' action='cart2.php?act=remove&id=$productid'>
         <button type='submit' name='remove' style='cursor:pointer'>x</button>
       </form>
        </div>
      </div>
      <br>
    ";
    echo $str;
  }

  function category($catid,$catname){
    $str = "
      <div class='cats $catname' id='$catname' onclick=\"showPros($catid,'$catname');\" >
        <h4>$catname</h4>
      </div>
      ";
      echo $str;
  }

  function categoryprods($catid,$catname){
    $str = "
  <div class=\"$catname\">
      <div class=\"row chi-itemrow\">
      ";
          $data = showall($catid);
          foreach($data as $d){
         component($d['name'],$d['price'],$d['id'],$d['img'],$catname,$catid); 
       }
        "
      </div>
      </div>

    ";
    echo $str;
  }

function ProductTemplate($header_text,$header_img,$item_name,$item_img,$item_price,$id,$cid){
  $str = "
        <div class=\"col-lg-4 grey\" class=\"item-container\" style='margin-top:10px' title='Click to see more'>
          <div class=\"card item\"> 
            <img src=\"$item_img\" onclick=\"showDetails('$id','$cid')\">
            <h5 class=\"item-title\">$item_name</h5>
     <h5 class=\"item-price\"><strike>&#8377;250</strike> &nbsp;&nbsp;<b>&#8377;$item_price</b>
              <span class=\"cart-add-btn\" style='padding:1px;border-radius:50%;background-color:green;color:black' onclick=\"cadd('$item_name','$id','$header_text','$cid')\">
                <i class=\"fas fa-cart-plus fv\" style='color:black'></i>
              </span>
            </h5>
          </div>
        </div>

  ";
  return $str;
}
function SingleProductTemplate($prod_image,$title,$price,$description){
  $str = "
        <div class=\"row\">
          <div class=\"col-lg-7\">
            <img src=\"$prod_image\" style=\"width:100%;height:300px\">
          </div>
          <div class=\"col-lg-5\">
            <h4 style=\"text-transform:uppercase;font-weight:bold\" class=\"text-center\">$title</h4>
            <h5 class=\"text-center card-text\"><b>Price : $price</b></h5>
            <hr>
            <p>$description</p>
          </div>
        </div>
  ";
  return $str;
}

function SearchElement($img,$name,$catname,$price,$id){
  $str = "
          <div class=\"row\">
          <div class=\"col-lg-2 indicol\" style=\"\">
            <img src=\"$img\" style=\"width:100px;border-radius: 50%;height:100px\">
          </div>
          <div class=\"col-lg-5 indicol\">
            <h4>$name</h4>
            <h6>$catname</h6>
          </div>
      <div class=\"col-lg-2 indicol\">
        <h4>$price</h4>
      </div>
      <div class=\"col-lg-3 indicol\">
        <button class=\"btn btn-primary\">Add to cart</button>
      </div>
      </div>
      <hr/>
  ";
  echo $str;;
}



?>