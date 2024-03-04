<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chocolate Bar</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">Chocolate<span>Barbar</span>.</a>

    <div class="navbar-nav">
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#menu">Product</a></li>
      <li><a href="#products">Best</a></li>
      <li class= "active"><a href="bukutamu.php">Buku Tamu</a></li>
    </ul>
    </div>

    <div class="navbar-extra">
      <a href="#" id="search-button"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <!-- Search Form start -->
    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
    </div>
    <!-- Search Form end -->

    <!-- Shopping Cart start -->
    <div class="shopping-cart">
      <div class="cart-item">
        <img src="img/products/dark coco.jpg" alt="Product 1">
        <div class="item-detail">
          <h3>Dark Chocolate</h3>
          <div class="item-price">IDR 25K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/white coco.jpg" alt="Product 1">
        <div class="item-detail">
          <h3>White Chocolate</h3>
          <div class="item-price">IDR 25K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/almond coco.jpg" alt="Product 1">
        <div class="item-detail">
          <h3>Almond Chocolate</h3>
          <div class="item-price">IDR 40K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/coco chips.jpg" alt="Product 1">
        <div class="item-detail">
          <h3>Candy Coating Chocolate</h3>
          <div class="item-price">IDR 15K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/strawberry coco.jpg" alt="Product 1">
        <div class="item-detail">
          <h3>Strawberry Chocolate</h3>
          <div class="item-price">IDR 40K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/hazelnut coco.jpg" alt="Product 1">
        <div class="item-detail">
          <h3>Hazelnut Chocolate</h3>
          <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
    </div>
    <!-- Shopping Cart end -->

  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home">
    <div class="mask-container">
      <main class="content">
        <h1>Berikan Senyuman Pagi Dengan <span>Chocolate</span></h1>
        <p>Chocolate adalah kebahagiaan yang bisa kamu nikmati, semoga dengan Chocolate dapat memaniskan hidupmu yang pahit</p>
        <a href="#" class="cta">Beli Sekarang</a>
      </main>
    </div>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about">
    <h2>About</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/pushpak-dsilva-r-hQw_obFd0-unsplash.jpg" alt="About">
      </div>
      <div class="content">
        <h3>Kenapa kalian harus beli coklat?</h3>
        <p>Manfaat makan cokelat lainnya adalah dapat menurunkan kadar kolesterol LDL atau lemak jahat. Sebaliknya, 
          cokelat justru dapat meningkatkan kadar kolesterol HDL atau lemak baik dalam tubuh. 
          Pilihan yang tepat ketika seseorang merasa stres atau depresi adalah dengan mengkonsumsi cokelat.</p>
        <p>Cokelat telah dikenal mampu memperbaiki mood atau suasana hati. Khasiat ini diperoleh dari beberapa kandungan cokelat yang memiliki efek antidepresan. 
          Komponen feniletilamin pada cokelat dikenal dapat meningkatkan mood seseorang. 
          Selain itu, magnesium memiliki peran untuk menjaga keseimbangan mood agar tetap stabil.</p>
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!-- Menu Section start -->
  <section id="menu" class="menu">
    <h2><span>Product</span> Kami</h2>
    <p>Kami menawarkan berbagai macam product coklat yang bermacam macam rasa dan juga jenisnya</p>

    <div class="row">
      <div class="menu-card">
        <img src="img/menu/dark coco.jpg"  class="menu-card-img">
        <h3 class="menu-card-title">- Dark Chocolate -</h3>
        <p class="menu-card-price">IDR 25K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/white coco.jpg"  class="menu-card-img">
        <h3 class="menu-card-title">- White Chocolate -</h3>
        <p class="menu-card-price">IDR 25K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/almond coco.jpg"  class="menu-card-img">
        <h3 class="menu-card-title">- Almond Chocolate -</h3>
        <p class="menu-card-price">IDR 40K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/coco chips.jpg"  class="menu-card-img">
        <h3 class="menu-card-title">- Candy Coating Chocolate -</h3>
        <p class="menu-card-price">IDR 15K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/strawberry coco.jpg"  class="menu-card-img">
        <h3 class="menu-card-title">- Strawberry Chocolate -</h3>
        <p class="menu-card-price">IDR 40K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/hazelnut coco.jpg"  class="menu-card-img">
        <h3 class="menu-card-title">- Hazelnut Chocolate -</h3>
        <p class="menu-card-price">IDR 30K</p>
      </div>
    </div>
  </section>
  <!-- Menu Section end -->

  <!-- Products Section start -->
  <section class="products" id="products">
    <h2><span>Produk Unggulan</span> Kami</h2>
    <p>Kami ada penawaran spesial, 
     membeli product Chocolate best seller kami dengan harga murah, buruan!</p>

    <div class="row">
      <div class="product-card">
        <!--<div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>-->
        <div class="product-image">
          <img src="img/products/almond coco.jpg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Almond Chocolate</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 40K</span></div>
        </div>
      </div>
      <div class="product-card">
        <!--<div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>-->
        <div class="product-image">
          <img src="img/products/strawberry coco.jpg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Strawberry Chocolate</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 40K</span></div>
        </div>
      </div>
      <div class="product-card">
        <!--<div class="product-icons">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>-->
        <div class="product-image">
          <img src="img/products/hazelnut coco.jpg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Hazelnut Chocolate</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 25K <span>IDR 30K</span></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Products Section end -->

  <!-- Contact Section start -->
  <section id="bukutamu" class="bukutamu">
    <h2><span>Buku</span> Tamu</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, provident.
    </p>

    <div class="row">

    <form action="">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" id="fname" placeholder="nama">
        </div>
        <div class="input-group">
          <i data-feather="hash"></i>
          <input type="text" id="fnim" placeholder="nim">
        </div>
        <div class="input-group">
          <i data-feather="trello"></i>
          <input type="text" id="ffakul" placeholder="fakultas">
        </div>
        <div class="input-group">
          <i data-feather="home"></i>
          <input type="text" id="addres" placeholder="alamat">
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="text" id="femail" placeholder="email">
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" id="fnoHp" placeholder="noHp">
        </div>
        <button type="submit" class="btn">kirim pesan</button>
      </form>
    <div>
        <br>
        <?php
            if(isset($_POST['fname'])){
                $fname = $_POST['fname'];
                echo "Nama Lengkap : $fname";
                echo "<br>";
            }
            if(isset($_POST['fnim'])){
                $fnim = $_POST['fnim'];
                echo "NIM : $fnim";
                echo "<br>";
            }
            if(isset($_POST['ffakul'])){
                $ffakul = $_POST['ffakul'];
                echo "Fakultas : $ffakul";
                echo "<br>";
            }
            if(isset($_POST['addres'])){
                $addres = $_POST['addres'];
                echo "Alamat : $addres";
                echo "<br>";
            }
            if(isset($_POST['femail'])){
                $femail = $_POST['femail'];
                echo "Email : $femail";
                echo "<br>";
            }
            if(isset($_POST['fnoHp'])){
                $fnoHp = $_POST['fnoHp'];
                echo "Nama Lengkap : $fnoHp";
                echo "<br>";
            }


        ?>

    </div>
    </div>
  </section>
  <!-- Contact Section end -->

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#menu">Menu</a>
      <a href="#bukutamu">Buku Tamu</a>
    </div>

    <div class="credit">
      <p>Created by <a href="">Sulthan Yustr Suwardhi</a>. | &copy; 2023.</p>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Modal Box Item Detail start -->
  <!--<div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/almond coco.jpg" alt="Product 1">
        <div class="product-content">
          <h3>Product 1</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati
            ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 40K</span></div>
          <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Box Item Detail end -->

  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- My Javascript -->
  <script src="js/script.js"></script>
</body>

</html>