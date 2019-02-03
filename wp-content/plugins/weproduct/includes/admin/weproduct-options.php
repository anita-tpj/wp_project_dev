<?php
function wep_options_mb($post) { 
    $weproduct_data = get_post_meta($post->ID, 'weproduct_data', true); 

    if(!$weproduct_data) :
        $weproduct_data = array(
        'name' => '',
        'description' => '',
        'details' => '',
        'type' => '',
        'image' => '',
        'price' => '',
        'sku' => '',
        'stock' => '',
        'featured' => ''
        );
    endif; ?>
    
  <div class="form-group">
    <label for="wepProductName">Product Name</label>
    <input type="text" class="form-control" id="wepProductName" name="wepProductName" value="<?php echo $weproduct_data['name']; ?>" placeholder="Product name">
  </div>

  <div class="form-group">
    <label for="wepProductDescription">Product Description</label>
    <textarea class="form-control" id="wepProductDescription" name="wepProductDescription" rows="3" placeholder="Product description"><?php echo $weproduct_data['description']; ?></textarea>
  </div>

  <div class="form-group">
    <label for="weproductDetails">Product Details</label>
    <textarea class="form-control" id="weproductDescription" name="wepProductDetails" rows="3" placeholder="Product details"><?php echo $weproduct_data['details']; ?></textarea>
  </div>

  <div class="form-group">
    <label for="wepProductType">Product Type</label>
    <select class="form-control" id="wepProductType" name="wepProductType" value="<?php echo $weproduct_data['type']; ?>">
      <option value ="1">1</option>
      <option value ="2" <?php echo $weproduct_data['type'] === "2" ? "selected" : '' ;?>>2</option>
      <option value ="3" <?php echo $weproduct_data['type'] === "3" ? "selected" : '' ;?>>3</option>
      <option value ="4" <?php echo $weproduct_data['type'] === "4" ? "selected" : '' ;?>>4</option>
      <option value ="5" <?php echo $weproduct_data['type'] === "5" ? "selected" : '' ;?>>5</option>
    </select>
  </div>

  <div class="form-group">
    <label for="wepProductImage">Product Image</label>
    <input type="text" class="form-control" id="wepProductImage" name="wepProductImage" value="<?php echo $weproduct_data['image']; ?>"placeholder="Product image">
  </div>
  <div class="form-group">
    <label for="wepProductPrice">Product Price</label>
    <input type="text" class="form-control" id="wepProductPrice" name="wepProductPrice" value="<?php echo $weproduct_data['price']; ?>" placeholder="Product price">
  </div>
  <div class="form-group">
    <label for="weproductSKU">Product SKU</label>
    <input type="text" class="form-control" id="wepProductSKU" name="wepProductSKU" value="<?php echo $weproduct_data['sku']; ?>" placeholder="Product SKU">
  </div>
  
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-4 pt-0">Product Stock</legend>
      <div class="col-sm-6">
        <div class="form-check">
        <label class="form-check-label" for="wepProductInStock">
            In Stock
            </label>
            <input class="form-check-input" type="radio" name="wepProductStock" id="wepProductInStock" value="in stock" checked <?php echo $weproduct_data['stock'] ==="in stock" ? "checked" : ""; ?>>
        </div>

        <div class="form-check">
        <label class="form-check-label" for="wepProductOutOfStock">
            Out of stock
            </label>
            <input class="form-check-input" type="radio" name="wepProductStock" id="wepProductOutOfStock" value="out of stock" <?php echo $weproduct_data['stock'] ==="out of stock" ? "checked" : ""; ?>>
        </div> 
      </div>
    </div>
  </fieldset>

  <div class="form-group form-check">
    <label class="form-check-label" for="wepFeaturedProduct">Featured Product</label>
    <input type="checkbox" class="form-check-input" id="wepFeaturedProduct" name="wepFeaturedProduct" value="yes" <?php echo $weproduct_data['featured'] ==="yes" ? "checked" : ""; ?> >
  </div>
<?php
}