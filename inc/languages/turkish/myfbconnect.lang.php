<?php

$l['myfbconnect'] = "Facebook İle Bağlan";
$l['myfbconnect_login'] = "Facebook İle Bağlan";

// redirects
$l['myfbconnect_redirect_loggedin'] = "Facebook hesabınızla başarılı bir şekilde oturum açtınız.";
$l['myfbconnect_redirect_registered'] = "Facebook hesabınızla başarıyla kayıt oldunuz ve oturum açtınız.";
$l['myfbconnect_redirect_title'] = "Hoşgeldiniz, {1}!";

// errors
$l['myfbconnect_error_noconfigfound'] = "Facebook ile bağlan eklentisinin ayarları yapılandırılmamış.Facebook api key ya da auth key eksik. Eğer, site yöneticisiyseniz lütfen bu ayarlarınızı yapılandırınız.";
$l['myfbconnect_error_noauth'] = "Facebook hesabınızla giriş izni vermedi.Sitemize facebook hesabınızla girmek isterseniz eğer Facebook Uygulama yöneticisinden sitemizin uygulamasına izin verin.";
$l['myfbconnect_error_report'] = "Bilinmeyen bir hata meydana geldi. Hata ile ile ilgili bug raporu aşağıdadır:<br>
<pre>{1}</pre><br>
Lütfen, bu hatayı site yöneticilerine bildiriniz.";
$l['myfbconnect_error_report_generated'] = "İsteğinizi gerçekleştirirken bir hata oluştu. Bu hata için bir rapor oluşturuldu. Eğer yöneticiyseniz bu hata raporunu okumalısınız değilseniz bu hata raporunu bir yöneticiye bildirin. Ayrıca bu hata anlık bir hata da olabilir, tekrar facebook ile giriş yapmayı deneyiniz. Rahatsızlık için özür dileriz.";
$l['myfbconnect_error_alreadyloggedin'] = "Zaten facebook hesabınızla oturum açtınız.";
$l['myfbconnect_error_verifiedonly'] = "Sadece doğrulanmış facebook hesaplarının kayıt veya giriş izni bulunmaktadır.Sitemize direkt kayıt olun ya da facebook hesabınızı doğrulayıp,tekrar deneyin.";
$l['myfbconnect_error_noidprovided'] = "Facebook hesabınızda veriler alınırken bilinmeyen bir hata oluştu. Ya bir eklenti hatası ya da bu sunucu bağlantı desteği sağlamıyor.Lütfen, bu hatayı bir yöneticiye rapor ediniz.";
$l['myfbconnect_error_unknown'] = "Bilinmeyen bir hata oluştu.";

// usercp
$l['myfbconnect_settings_title'] = $l['myfbconnect_page_title'] = "Facebook Entegrasyonu";
$l['myfbconnect_settings_save'] = "Kaydet";
$l['myfbconnect_settings_unlink'] = "Hesabımın bağlantısını kaldır.";
$l['myfbconnect_settings_fbavatar'] = "Avatar ve Kapak Resimlerin";
$l['myfbconnect_settings_fbsex'] = "Cinsiyetin";
$l['myfbconnect_settings_fbbio'] = "Hakkında";
$l['myfbconnect_settings_fbdetails'] = "İsim ve Soyismin";
$l['myfbconnect_settings_fbbday'] = "Doğum Tarihin";
$l['myfbconnect_settings_fblocation'] = "Yaşadığın Yer";
$l['myfbconnect_link'] = "Facebook hesabınızı bağlamak için tıklayın.";
$l['myfbconnect_settings_whattosync'] = "Facebook hesabınızda ki hangi verilerinizi almamızı istiyorsanız o verilerinizi seçiniz. Zorunlu alanlar dışında diğer verileriniz hakkında işlemleri siz belirleyebilirsiniz.";
$l['myfbconnect_settings_linkaccount'] = "Facebook hesabınızı bağlamak ve sekronize etmek için sağ tarafta ki butona tıklayınız.";
$l['myfbconnect_settings_connected'] = "Facebook hesabınızı zaten forum hesabınızla bağlanmış. Bağlantıyı kaldırmak için aşağıda ki butona tıklayın.";

// registration
$l['myfbconnect_register_title'] = "Facebook ile Kayıt";
$l['myfbconnect_register_basicinfo'] = "Temel hesap bilgilerinizi seçiniz. Bu bilgiler otomatik olarak facebook hesabınızdan alınmaktadır.Dilerseniz bu bilgilerinizi değiştirebilirsiniz, değiştirdiğinizde facebook hesabınızla sekronize edilecektir.";
$l['myfbconnect_register_whattosync'] = "Facebook hesabınızdan alınmasını istediğiniz bilgileri seçiniz. Seçtiğiniz bilgiler facebook hesabınızdan alınıp,forum hesabınızla sekronize edilecektir.";
$l['myfbconnect_register_username'] = "Kullanıcı Adınız:";
$l['myfbconnect_register_email'] = "Email:";

// success messages
$l['myfbconnect_success_linked'] = "Facebook hesabınız başarıyla forum hesabınıza bağlanmıştır.";
$l['myfbconnect_success_settingsupdated'] = "Facebook entegrasyonu ile ilgili ayarlarınız güncellenmiştir.";
$l['myfbconnect_success_settingsupdated_title'] = "Ayarlar Güncellendi";
$l['myfbconnect_success_accunlinked'] = "Facebook hesabınızın,forum hesabında ki bağlantısı başarıyla kaldırılmıştır.";
$l['myfbconnect_success_accunlinked_title'] = "Bağlantı kaldırıldı";

// who's online
$l['myfbconnect_viewing_loggingin'] = "<a href=\"myfbconnect.php?action=fblogin\">Facebook İle Bağlanıyor</a>";
$l['myfbconnect_viewing_registering'] = "<a href=\"myfbconnect.php?action=fbregister\">Facebook İle Kayıt Oluyor</a>";

// others
$l['myfbconnect_male'] = "Erkek";
$l['myfbconnect_female'] = "Kadın";