<!-- Cart -->
  											<?php
											$idmem = 1;
											$count = 1;
  											$tab = mysql_query("SELECT chart.id_chart, produk.nama_produk,produk.gambar_produk,produk.harga,chart.total
												FROM chart
												INNER JOIN produk ON chart.id_produk = produk.id_produk WHERE id_member =$idmem");
  												if(mysql_num_rows($tab) == 0)
														{   
												    		echo '<tr><td colspan="6">Tidak ada data!</td></tr>'; 
        												}
        												else
        												{
  															while ($tb = mysql_fetch_assoc($tab))
  															{
  																echo '
																<div class="dropdown">
																<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
																	<i class="fa fa-shopping-cart"></i>
																	<span>Keranjang Belanja</span>
																	<div class="qty">3</div>
																</a>
									
																<div class="cart-dropdown">
																	<div class="cart-list">
																	<div class="product-widget">
																		<div class="product-img">
																			<img src="'.$data['gambar_produk'].'" alt="">
																</div>

																<div class="product-body">
																<h3 class="product-name"><a href="#">'.$data['nama_produk'].' </a></h3>';
															}
														}
											?>
													
												<?php
 													$tab2 = mysql_query("SELECT COUNT(*) FROM chart where id_member");
  														if(mysql_num_rows($tab2) == 0)
														{   
												    		echo '<tr><td colspan="6">Tidak ada data!</td></tr>'; 
        												}
        												else
        												{
  															while ($te = mysql_fetch_assoc($tab2))
  															{
    															echo '
    															<h4 class="product-price"><span class="qty">'.$data['harga'].' </span></h4>
																</div>
																<button class="delete"><i class="fa fa-close"></i></button>
																</div>

																<div class="cart-summary">
																<small>'.$te.' produk dipilih</small>
																<h5>SUBTOTAL: $2940.00</h5>
																</div>
															
																<div class="cart-btns">
																	<a href="#">View Cart</a>
																	<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
																</div>
																</div>
																</div>
																<!-- /Cart -->
    															';
    														}
    													}
    											?>