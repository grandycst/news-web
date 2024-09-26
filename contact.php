<?php
include 'koneksi.php'; 
// Mengambil data kontak
$query_kontak = "SELECT * FROM kontak ORDER BY id_kontak";
$result_kontak = $koneksi->query($query_kontak);
$kontak = $result_kontak->fetch_assoc();
?>
        <!-- Contact Us Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="bg-light rounded p-5">
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="">
                                <h1 class="mb-4">General Customer Care & Technical Support</h1>
                                <div class="rounded">
                                    <iframe class="rounded w-100" 
                                    style="height: 425px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255314.40336477582!2d100.39126985!3d-0.9345836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b942e2b117bb%3A0xb8468cb5c3046ba5!2sPadang%2C%20Kota%20Padang%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1725333587578!5m2!1sid!2sid" 
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <form action="" class="mb-4">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <input type="text" class="w-100 form-control border-0 py-3" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" class="w-100 form-control border-0 py-3" name="email" placeholder="Enter Your Email">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="w-100 form-control border-0 py-3" name="phone" placeholder="Enter Your Phone">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="w-100 form-control border-0 py-3" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="w-100 form-control border-0" rows="6" cols="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="w-100 btn btn-primary form-control py-3" type="submit">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                         
                            <div class="row g-4">
                                <div class="col-xl-6">
                                    <div class="d-flex p-4 rounded bg-white">
                                        <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                        <div>
                                            <h4>Address</h4>
                                            <p class="mb-0"><?php echo $kontak['alamat']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex p-4 rounded bg-white">
                                        <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                        <div>
                                            <h4>Mail Us</h4>
                                            <p class="mb-0"><?php echo $kontak['email']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex p-4 rounded bg-white">
                                        <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                        <div>
                                            <h4>Telephone</h4>
                                            <p class="mb-0"><?php echo $kontak['no_telp']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex p-4 rounded bg-white">
                                        <i class="fa fa-share-alt fa-2x text-primary me-4"></i>
                                        <div>
                                            <h4>Share</h4>
                                            <div class="d-flex">
                                                <a class="me-3" href="<?php echo $kontak['instagram']; ?>"target="_blank"><i class="fab fa-twitter text-dark link-hover"></i></a>
                                                <a class="me-3" href="<?php echo $kontak['facebook']; ?>"target="_blank"><i class="fab fa-facebook-f text-dark link-hover"></i></a>
                                                <a class="me-3" href="<?php echo $kontak['facebook']; ?>"target="_blank"><i class="fab fa-youtube text-dark link-hover"></i></a>
                                                <a class="" href="<?php echo $kontak['instagram']; ?>" target="_blank"><i class="fab fa-linkedin-in text-dark link-hover"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Us End -->
        
       