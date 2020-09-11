<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
      <li><a><i class="fa fa-product-hunt"></i> Products<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('productcategory.index')}}">Product Category</a></li>
            <li><a href="{{route('product.index')}}">Product</a></li>
            <li><a href="{{route('productImage.index')}}">Product Images</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-user"></i>Customer<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('customerDetail.index')}}">Customer Details</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-credit-card"></i> Payments<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              
              <li><a href="{{route('payment.index')}}">Payments</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-phone"></i> Contacts<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('contact.index')}}">Company Contact</a></li>
              <li><a href="{{route('contactForm.index')}}">Customer Form</a></li>
            </ul>
          </li>


       
      </ul>
    </div>
    
  </div>
