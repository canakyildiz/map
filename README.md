<h1>MAP MODÜLÜ</h1>

Oluşturduğumuz modül harita kullanırken bulmak istediğiniz yeri daha hızlı bulmanıza yardımcı olmak için tasarlanmıştır.

<h4>Kullanımı</h4>

Ana klasörde bulunan composer.json dosyasının içindeki "repositories" kısmına eklemeniz gereken kod aşağıda verilmiştir.
        
        {
            "type": "vcs",
            "url": "https://github.com/canakyildiz/map.git"
        }
        
ardından "require" kısmına ise 

        "projeAdi/map": "dev-master"
        
eklenerek kurulum sağlanabilir.

Giriş sağlandıktan sonra Creat map diyerek hazırda bulunmasını istediğiniz yeri tabloya ekleyebilirsiniz.</br>
Show map diyerek hazırda bulunan haritaları görüntüleyebilirsiniz.






#map
<h4>Kocaeli Üniversitesi Bilişim Sistemleri Mühendisliği Web Programlama dersi projesi "map" modülüdür.</h4>

-Kurulum- 
Başlangıçta Virtual Box ve Vagrant programı ile sanal makine kurulumu yapıldı.Portal.kouosl sayfasına giriş yapıldı ama sonra bi hata meydana geldi ve giriş yapılamadı bu nedenle yerel makine kurulumu ile devam edildi.

Yerel makine kurulumundan sonra phpmyadmin ile veritabanı bağlantısı sağlandı. Apache server kök dizinleri düzenlendi.

Bu sırada clone işlemi yapılam portal dosyarı Visual Studio Code ile kendi modülümün ismi şeklinden düzenlendi. Bu sayede portal.kouosl/map linkine giriş sağlandı.

Veritabanı tabloları oluşturulduktan sonra veritabanı aktarım "migration" işlemi gerçekleştirildi.Ardından kodlama işlemine geçildi.

İlk olarak Maps JavaScript API KEY alındı. Google'ın geliştiricilere özel developers.google.com dan script hazır kodları alınarak dünya haritalarına ulaşım sağlandı.

