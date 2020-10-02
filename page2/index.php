<?php   if (!empty($_POST['phone'])) {
  send_the_order ($_POST);
}
function send_the_order ($post){
  $params=array(
    'flow_hash' => $post['flow_hash'],
      'landing' => $post['landing'],
      'referrer' => $post['referrer'],
      'phone' => $post['phone'],
      'name' => $post['name'],
      'country' => $post['country'],
      'address' => $post['address'],
      'email' => $post['email'],
      'lastname' => $post['lastname'],
      'comment' => $post['comment'],
      'layer' => $post['layer'],
      'ip' => $post['ip'],
      'sub1' => $post['sub1'],
      'sub2' => $post['sub2'],
      'sub3' => $post['sub3'],
      'sub4' => $post['sub4'],
      'sub5' => $post['sub5'],
      'link_redirect' => $post['link_redirect']
  );
 $url = 'http://leadbit.com/api/new-order/4c24536a4c7c325743526d25636c7b47';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
  curl_setopt($ch, CURLOPT_REFERER, $url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
  $return= curl_exec($ch);
  curl_close($ch);
  $array=json_decode($return, true);
  header('Location: order/order.html');
} ?>
<!DOCTYPE html><html>
<head>
    <title>StopBadBreath</title>
	<meta charset="UTF-8">
	<meta name="author" content="Page content main keyword">
  <meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="style.css">
<!-- Yandex.Metrika counter -->
<!-- /Yandex.Metrika counter -->
</head>

<body>
<div class="widget-view centered">
<div class="product-container">
  <span class="product-header-2">Ecositin</span>
  <span class="product-header">
      Take care of your <br> loved ones today!
  
  </span>
  <a class="product"></a>
      <img src="img/item-product.png" style="max-width: 300px; display: block; text-align: center; margin: auto;" alt="Ecositin image"/>
      
      <img src="img/price.png" style="max-width: 250px; display: block; text-align: center; margin: auto;" alt="1990php"/>
  <span style="text-align: center;
  display: block;
  font-size: 16px;
  color: #980000;
  text-transform: capitalize;
  font-weight: 600;" >50% OFF - limited time offer!
  </span>
  </div>
  <span class="des-header">Only <span style="color: rgb(89, 167, 0); font-size: 32px; font-weight: 600;">natural</span> ingredients</span>  
  
<div class="des-cont">
  <div class="product-description">
    <span class="pro-head">Rare Tibetan Five-petalled Yarrow</span>
    <div class="product-description-container">
    <div class="block_centre"></div>
    <span class="pro-des1">Creates a protective membrane on the mucous membrane and prevents the penetration of viruses, parasites and dangerous microorganisms for a month. Restores intestinal microflora.</span>
  </div>
  </div>
  <div class="product-description2">
    <span class="pro-head">Altai centaury</span>
    <div class="product-description-container2">
    <div class="block_centre2"></div>
    <span class="pro-des2">Eliminates toxins and parasites from the body. Creates an environment in the body that protects against the reappearance of parasites.</span>
  </div>
</div>
  <div class="product-description">
    <span class="pro-head">Extract from healing flowers</span>
    <div class="product-description-container">
    <div class="block_centre3"></div>
    <span class="pro-des1">Restores tissues and organs damaged by parasites. Heals wounds, has anti-inflammatory effects and prevents bleeding.</span>
  </div>
</div>
</div>
<hr>
<span class="des-header2">How Ecositin <span style="color: #58760f; font-size: 46px; font-weight: 600;">works</span></span> 

<div class="des-cont">
  <img id="img7" src="img/4_img_1-mob.png" alt=des4">
  <span class="pro-des3">The Ecositin <b>restores alkaline balance</b> in the stomach, kills and prevents the growth of worms or parasites. <b>Removes bad breath and bloating</b>.</span>
</div>

<div class="des-cont2">
  <img id="img7" src="img/4_img_2-mob.png" alt=des4">
  <span class="pro-des3">Strengthens the function of the gallbladder. Helping your body <b>naturally get rid of parasites</b>, larvae and eggs. <b>No harsh chemicals!</b></span>
</div>

<div class="des-cont2">
  <img id="img7" src="img/4_img_3-mob.png" alt=des4">
  <span class="pro-des3">Improves the intestinal microflora. <b>Boosts digestion and restores the normal functioning of the immune system</b> and solves the weight problem.<br>Improves the functioning of the cardiovascular and nervous systems. Improves sleep quality.</span>
</div>

<div class="des-cont2">
  <img id="img7" src="img/4_img_4-mob.png" alt=des4">
  <span class="pro-des3">Does not contain allergens. <b>Completely safe product for health</b>. Suitable for children from 6 years old.</span>
</div>


<hr>
<div class="des-box">
<span class="des-header2">How to use <span style="color: #58760f; font-size: 46px; font-weight: 600;">Ecositin</span></span> 

<div class="des-cont">
  <img id="img8" src="img/6_foto_1.png" alt=des4">
  <span class="des-header3">removal</span>
  <span class="pro-des3">For complete removal of parasites from the body, <b>take 1 capsule of Ecositin at breakfast</b> and 1 capsule at night with some water.</span>
</div>

<div style="margin-top: 20px;" class="des-cont">
  <img id="img8" src="img/6_foto_2.png" alt=des4">
  <span class="des-header3">to avoid</span>
  <span class="pro-des3">After cleansing your body, take 2 capsules at breakfast <b>twice a week for prevention</b>.</span>
</div>
</div>
<div class="recom">
  <span>Recommended treatment<br>duration<br>
    <span style="font-size: 30px; font-weight: 800;">20 days</span>
  </span>
</div>


</div>
<a id="order"></a> 
<div style="clear: both;" class="form-container">

        

  <form action="" class="order_form" method="POST">
      <div class="ord-head">
        <span id="ord">Order form</span>
        <span id="ord-des">The request will be sent to the official seller of Ecositin</span><br>

      </div>
  
      <label class="form-text">Name</label>
      <input class="form-field" type='text' name='name' placeholder='Paolo Avelino' required="">
      <label class="form-text">Phone</label>
      <input class="form-field" type='tel' name='phone' placeholder='+63 123456789' required="">
      <div class="form-description">Enter an available phone number. Our operator will contact you to confirm your order.</div>
      
      <select class="input-form block11__right_form-select country_select" name="country" style="display: none;">
          <option value="ph">Pilipinas</option>
      </select>

      <input type="hidden" name="landing" value="ph.ecositinnd.com"><!-----><input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>"><input type="hidden" name="createdAt" value="<?=date("Y-m-d H:i:s")?>"><input type="hidden" name="userAgent" value="<?=$_SERVER['HTTP_USER_AGENT']?>"><input type="hidden" name="flow_hash" value="JYPk"><input type="hidden" name="sub1" value="ph-dtx-57"><input type="hidden" name="sub2" value=""><input type="hidden" name="sub3" value=""><input type="hidden" name="sub4" value=""><input type="hidden" name="sub5" value=""><input type="hidden" name="referrer" value="<?=$_SERVER['HTTP_REFERER']?>">

      <div class="orderBtn">
          <button type="submit" value='Buy' class="orderBtn">Order now!</button>
      </div>
  </form>
</div>                           
                        </div>

<span class="footer">© 2020. All rights reserved.<br>Secure connection.</span>
                        
</body>
</html>