<p class="has-line-data" data-line-start="0" data-line-end="1">Laravel Albasoft Projesi İçin Gerekli Bilgiler</p>
<p class="has-line-data" data-line-start="3" data-line-end="4">Projeyi kurmak için</p>
<p class="has-line-data" data-line-start="5" data-line-end="11">.env uzantılı dosya oluşturulup env.example içinden kopyalanır. env de database kısımlarını kendiniz bir veritabanı oluşturup gerekli bilgileri girebilirsiniz.<br>
composer install<br>
php artisan jwt:secret<br>
php artisan key:generate (gerekirse)&lt;<br>
php artisan migrate<br>
php artisan db:seed</p>
<p class="has-line-data" data-line-start="12" data-line-end="13">Proje apilerine ulaşmak için postman collection dosyasını ekledim. İmport edip test edebilirsiniz. Bearer token ı postman collection değişkeni olarak ekledim login olduktan sonra lütfen tokeni variables kısmındaki token değişkenine atayınız.</p>
<p class="has-line-data" data-line-start="14" data-line-end="15">Proje Özeti</p>
<p class="has-line-data" data-line-start="16" data-line-end="19">Projenin authentication kısımları laravel jwt ile yapılmıştır.<br>
Repository Pattern kullanılmıştır.<br>
Request içinde role kontrolünü direk authorize kısmından yaptım ancak detaylı yetkilendirme için policy kullanılabilirdi.</p>
<p class="has-line-data" data-line-start="20" data-line-end="21">Projede ki son aşamayı kullanıcının sepete ürün yükleme ve silmesi kısmını yetiştiremedim. Çalıştığım şirketteki mesai bu ara biraz yoğundu. Ancak yaptıklarım yeterli olur diye düşünüyorum. Sepete ürün eklemek için tablo yapısını basit bir şekilde oluşturmuştum. Basit bir crud ile product_id ve user_id ile bu işlemler kısaca yapılabilir.</p>
<p class="has-line-data" data-line-start="22" data-line-end="23">Proje dosyayı master branchindedir !!!</p>
