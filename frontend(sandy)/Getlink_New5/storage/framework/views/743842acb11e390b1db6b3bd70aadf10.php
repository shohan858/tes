<?php $__env->startSection('konten'); ?>
    <main>
        <div class="content">
            <div class="pages1-content hidden">
                <div class="anim regu-content-top">
                    <?php if(Auth::user()->jumlah_microsite == Auth::user()->batas_microsite): ?>
                        <button class="content-tambah" title="Anda Sudah mencapai Max, Upgrade Untuk Menambah " style="cursor:no-drop" disabled> tambah microsite </button>
                    <?php else: ?>
                        <a class="content-tambah" href="/page2"> tambah microsite </a>
                    <?php endif; ?>
                    <input type="text" name="cari" id="cari" class="content-cari" placeholder="Cari microsite" />
                </div>
                <div class="tenggah">
                    <p class="st"><?php echo e(Auth::user()->jumlah_microsite); ?>/<?php echo e(Auth::user()->batas_microsite); ?></p>
                </div>
                
                <?php $__currentLoopData = $my_microsite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="anim content-isi-regu">
                        <div class="content-kiri-regu">
                            <div class="content-box">
                                <img class="img-inside" src="<?php echo e(asset('gambar/partai.png')); ?>" alt="">
                            </div>
                            <div class="box-text">
                                <p class="nama-microsite"><?php echo e($item->name); ?></p>
                                <a class="link-microsite"><?php echo e(env('APP_URL')); ?>/<?php echo e($item->link); ?></a>
                                <p class="pb-microsite"></p>
                            </div>
                        </div>
                        <div class="content-kanan">
                          <button class="content-crud" onclick="copyToClipboard('<?php echo e($item->link); ?>')">
                            <img src="<?php echo e(asset('assets/img/Vector (3).svg')); ?>" alt="" />
                            Bagikan
                        </button>
                            <a href="pages5.html" class="content-crud">
                                <img src="<?php echo e(asset('assets/img/🦆 icon _edit_.png')); ?>" alt="" />
                                Edit
                            </a>
                            <button id="del<?php echo e($index); ?>" class="content-crud"
                                onclick="openDelModal(<?php echo e($index); ?>)">
                                <img src="<?php echo e(asset('assets/img/Vector (2).svg')); ?>" alt="" />
                                Hapus
                            </button>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <!-- Perulangan foreach -->

                <div class="anim content-isi-regu">
                    <div class="content-kiri-regu">
                        <div class="content-box">
                            <img class="img-inside" src="<?php echo e(asset('gambar/partai.png')); ?>" alt="">
                        </div>
                        <div class="box-text">
                            <p class="nama-microsite"></p>
                            <a class="link-microsite"></a>
                            <p class="pb-microsite"></p>
                        </div>
                    </div>
                    <div class="content-kanan">
                        <button class="content-crud">
                            <img src="<?php echo e(asset('assets/img/Vector (3).svg')); ?>" alt="" />
                            Bagikan
                        </button>
                        <a href="pages5.html" class="content-crud">
                            <img src="<?php echo e(asset('assets/img/🦆 icon _edit_.png')); ?>" alt="" />
                            Edit
                        </a>
                        <button class="content-crud">
                            <img src="<?php echo e(asset('assets/img/Vector (2).svg')); ?>" alt="" />
                            Hapus
                        </button>
                    </div>
                </div>

                <!-- End Perulangan -->

            </div>
        </div>
    </main>

    <?php $__currentLoopData = $my_microsite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Modal -->
        <div id="DelComModal<?php echo e($index); ?>" class="del-com-modal navAni">
            <div class="del-conmo">
                <span class="del-close" onclick="closeDelModal(<?php echo e($index); ?>)">&times;</span>
                <p class="del-hapus-tulisan1">Konfirmasi Hapus</p>
                <p class="del-hapus-tulisan2">Apakah anda yakin ingin menghapus microsite ini</p>
                <div class="del-bungkus-hapusbutton">
                    <button id="delbal<?php echo e($index); ?>" class="del-batal-button"
                        onclick="closeDelModal(<?php echo e($index); ?>)">Batal</button>
                    <form action="" method="post">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <button id="btnTrash<?php echo e($index); ?>" class="del-hapus-button"
                        onclick="deleteItem(<?php echo e($index); ?>)" type="submit">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    

    

<script>
  function copyToClipboard(link) {
      const input = document.createElement('textarea');
      input.value = 'localhost:8000/'+link;
      document.body.appendChild(input);
      input.select();
      document.execCommand('copy');
      document.body.removeChild(input);
      alert('Link telah disalin ke clipboard!');
  }
</script>

    <script>
        function openDelModal(index) {
            var delmodal = document.getElementById("DelComModal" + index);
            delmodal.style.display = "block";
        }

        function closeDelModal(index) {
            var delmodal = document.getElementById("DelComModal" + index);
            delmodal.style.display = "none";
        }

        function deleteItem(index) {
            // kode untuk menghapus item dari array atau database
            // lalu refresh halaman atau menghapus elemen HTML yang terkait dengan item tersebut
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '#pop_up_batas', function() {
                alert('Anda Sudah Mencapai Batas');
                return false;
            });
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.Dashboard_user.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FrondEnd\quest\GetLink_lain\Getlink_New5\resources\views/Dashboard_User/regular.blade.php ENDPATH**/ ?>