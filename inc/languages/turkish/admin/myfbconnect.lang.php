<?php
// Installation
$l['myfbconnect'] = "Facebook İle Bağlan";
$l['myfbconnect_pluginlibrary_missing'] = "<a href=\"http://mods.mybb.com/view/pluginlibrary\">PluginLibrary</a> sitenizde yüklü değil. Facebook ile bağlan eklentisinin çalışabilmesi için bu eklenti kurulu olması gerekmektedir.";

// Settings
$l['setting_group_myfbconnect'] = "Facebook İle Bağlan Eklenti Ayarları";
$l['setting_group_myfbconnect_desc'] = "Bu kısımda eklenti için gerekli olan ayarlarınızı yapılandırabilirsiniz.";
$l['setting_myfbconnect_enable'] = "Üye Kayıtlarını Aktif Et";
$l['setting_myfbconnect_enable_desc'] = "Kullanıcılarınızın Facebook ile sitenize kayıt olmasını ve oturum açmalarını istiyorsanız bu ayarı evet olarak seçiniz.<br /> Eğer kullanıcı daha önce facebook hesabıyla üye olduysa, facebook profili forum hesabına bağlanacaktır.";
$l['setting_myfbconnect_appid'] = "App ID (Uygulama ID)";
$l['setting_myfbconnect_appid_desc'] = "Facebook'ta oluşturduğunuz uygulamanın App ID'sini bu kısma giriniz.";
$l['setting_myfbconnect_appsecret'] = "App Secret (Uygulama Güvenlik Anahtarı)";
$l['setting_myfbconnect_appsecret_desc'] = "Facebookta oluşturduğunuz uygulama için size verilen App Secret (Güvenlik Anahtarı) nı bu kısma giriniz.";
$l['setting_myfbconnect_fastregistration'] = "Tek Tıkla Kayıt";
$l['setting_myfbconnect_fastregistration_desc'] = "Bu seçeneği aktif ettiğinizde kullanıcı Facebook hesabıyla sitenize bağlanmak istediğinde kullanıcıya ekstra bir form doldurma isteği sunmadan direkt olarak Facebook hesabı bilgileriyle sekronize ederek sitenize kaydını yaptıracaktır.
<br />Bu ayarı devredışı bıraktığınızda kullanıcılara bir kayıt formu gösterilecektir ve o formu doldurduktan sonra kayıt işlemi yapılacaktır.<b>Bu ayarın açık olması tavsiye edilir.</b>";
$l['setting_myfbconnect_usergroup'] = "Kayıttan Sonra Üyenin Aktarılacağı Grup";
$l['setting_myfbconnect_usergroup_desc'] = "Facebook ile kayıt olan kullanıcılarınızın hangi gruba dahil etmek istiyorsanız o grubu aşağıdan seçiniz. Standart olarak üye grubu seçilmiştir ve bu şekilde kalması tavsiye edilir.";
$l['setting_myfbconnect_verifiedonly'] = "Sadece Doğrulanmış Hesapları Kabul Et";
$l['setting_myfbconnect_verifiedonly_desc'] = "Bu seçeneği aktif ettiğiniz zaman sadece onaylı facebook hesabına sahib olan kullanıcılarınız sitenize kayıt olabilecek veya oturum açabilecektir. Onaylı hesap durumu, kullanıcının facebook hesabını doğrulamasıdır. Bunu e-mail ve SMS doğrulaması ile yapmasıdır.Hesabını hem e-mail hem sms ile doğrulamışsa kullanıcı sitenize kayıt olabilecektir. <br /> <strong>Bu ayarın aktif olması tavsiye edilir. Spam kayıtları engellemek için gereklidir.</strong>";
$l['setting_myfbconnect_passwordpm'] = "Kayıttan Sonra Özel Mesaj (PM) Gönder";
$l['setting_myfbconnect_passwordpm_desc'] = "Facebook hesabıyla sitenize yeni kayıt olmuş kullanıcı(lara) özel mesaj göndermek istiyorsanız bu ayarı aktif ediniz. Genelikle yeni şifre göndermek için kullanılmaktadır.";
$l['setting_myfbconnect_passwordpm_subject'] = "ÖM Başlığı";
$l['setting_myfbconnect_passwordpm_subject_desc'] = "Kullanıcı(lara) göndereceğiniz özel mesajın başlığını belirtiniz.";
$l['setting_myfbconnect_passwordpm_message'] = "ÖM İçeriği";
  $l['setting_myfbconnect_passwordpm_message_desc'] = "Alt kısımda ki alana kullanıcı(lara) göndereceğiniz özel mesajın içeriğini belirtiniz. Default olarak bir mesaj içeriği girilmiştir. Bu kısmın default ayarda kalması tavsiye edilir,isteğe bağlı olarak değiştirebilirsinizde.<br />
  Bu kısımda kullanabileceğiniz parametreler: <i>{user}</i>,<i>{password}</i>-><strong>Kullanıcıya şifresini bildirmek için kesinlikle özel mesaj içeriğinde kullanılmalıdır.</strong> Özel mesaj içeriğinde HTML ve BBCode kullanabilirsiniz.";
$l['setting_myfbconnect_passwordpm_fromid'] = "ÖM Gönderen ?";
$l['setting_myfbconnect_passwordpm_fromid_desc'] = "Kullanıcıya özel mesajın kimin tarafından gönderileceğini burada belirtebilirsiniz.Bu kısma kullanıcın UID (üye id) numarasını belirtmeniz gerekiyor. Default olarak <strong>0</strong> değerinin girilmesi tavsiye edilir. MyBB'nin default pm göndericisidir.";
$l['setting_myfbconnect_postonwall'] = "Kayıttan Sonra Facebook Durumu Paylaşılsın mı?";
$l['setting_myfbconnect_postonwall_desc'] = "Sitenize facebook hesabıyla kayıt olan kullanıcının profiline aşağıda belirttiğiniz mesajın paylaşılmasını istiyorsanız bu ayarı aktif edin. Aktif ettiğinizde kullanıcıya bu durum ile ilgili izin istenecektir. İznin verilmesi durumunda aşağıda girmiş olduğunuz mesaj kullanıcın facebook profilinde yayınlanacaktır.";
$l['setting_myfbconnect_postonwall_message'] = "Facebook Profil Mesajı";
$l['setting_myfbconnect_postonwall_message_desc'] = "Facebook durumunda paylaşılmasını istediğiniz mesajı giriniz.Bu kısımda kullanabileceğiniz parametreler: {bbname} -> Site adını mesaja ekler. {bburl} -> Sitenizin url'sini mesaja ekler.";

// Custom fields
$l['setting_myfbconnect_fbavatar'] = "Avatar ve Kapak Resimlerini Sekronize Et";
$l['setting_myfbconnect_fbavatar_desc'] = "Kullanıcıların Facebook hesaplarındaki avatar ve kapak resimlerini sekronize etmek istiyorsanız bu ayarı aktif ediniz.";
$l['setting_myfbconnect_fbbday'] = "Doğum Tarihini Sekronize Et";
$l['setting_myfbconnect_fbbday_desc'] = "Kullanıcıların Google+ hesaplarında ki doğum tarihlerini sekronize etmek istiyorsanız bu ayarı aktif ediniz.";
$l['setting_myfbconnect_fblocation'] = "Yaşadığı Yeri/Konumu Sekronize Et";
$l['setting_myfbconnect_fblocation_desc'] = "Kullanıcıların Google+ hesaplarında belirttikleri şehir/kasaba ve ülke gibi bilgilerini sekronize etmek ve bunları forumda göstermek istiyorsanız aşağıdan bir profil alanı seçiniz.";
$l['setting_myfbconnect_fblocationfield'] = "Konum/Yaşadığı Yer İçin Profil Alanı Seçiniz";
$l['setting_myfbconnect_fblocationfield_desc'] = "Kullanıcıların yaşadıkları konum/yeri profil kısmında hangi alanda göstermek istiyorsanız o profil alanı seçiniz.";
$l['setting_myfbconnect_fbbio'] = "Hakkında/Biyografisini Sekronize Et";
$l['setting_myfbconnect_fbbio_desc'] = "Kullanıcıların Facebook hesaplarında kendileri hakkında bilgi girdikleri,biyografi kısımını sekronize etmek istiyorsanız bu ayarı aktif ediniz.";
$l['setting_myfbconnect_fbbiofield'] = "Hakkında/Biyografi İçin Profil Alanı Seçiniz";
$l['setting_myfbconnect_fbbiofield_desc'] = "Sekronize edilen hakkında/biyografi bilgilerini, forum profilinde nerede gösterilmesini istiyorsanız o kısmın profil alanını seçiniz";
$l['setting_myfbconnect_fbdetails'] = "İsim ve Soyismi Sekronize Et";
$l['setting_myfbconnect_fbdetails_desc'] = "Kullanıcıların isim ve soyisimlerini sekronize etmek istiyorsanız bu ayarı aktif ediniz.";
$l['setting_myfbconnect_fbdetailsfield'] = "İsim ve Soyisim İçin Profil Alanı Seçiniz";
$l['setting_myfbconnect_fbdetailsfield_desc'] = "Kullanıcıların isim ve soyisimlerini sekronize edilip daha sonra profilde görünmesini istediğiniz profil alanı seçiniz.";
$l['setting_myfbconnect_fbsex'] = "Cinsiyet Alanını Sekronize Et";
$l['setting_myfbconnect_fbsex_desc'] = "Kullanıcıların cinsiyetlerini sekronize etmek istiyorsanız bu ayarı aktif ediniz.";
$l['setting_myfbconnect_fbsexfield'] = "Cinsiyet İçin Profil Alanı Seçiniz";
$l['setting_myfbconnect_fbsexfield_desc'] = "Kullanıcıların cinsiyetlerini profillerinde göstermek istiyorsanız,aşağıdan bir profil alanı seçiniz.";

// Default PM
$l['myfbconnect_default_passwordpm_subject'] = "Yeni Şifreniz";
$l['myfbconnect_default_passwordpm_message'] = "Hoşgeldin, Sayın {user}!

Sitemize facebook hesabınızla başarıyla kayıt oldunuz ve facebook hesabınızda ki bilgiler forum hesabınızla başarılı bir şekilde sekronize edildi.
Sitemizin artık bir üyesisiniz. Sitemize tekrar giriş yapabilmek için bir şifreye ihtiyacınız var bu şifre sizin için otomatik olarak sistem tarafından
oluşturuldu. Aşağıdan şifrenizi görebilirsiniz veya sol tarafta ki kullanıcı menüsünden [b]Şifremi Değiştir[/b] kısmından şifrenizi değiştirebilirsiniz.

Yeni Şifreniz: [b]{password}[/b]

Saygılarımızla,
{bbname} - Yönetimi";
$l['myfbconnect_default_postonwall_message'] = "Az önce #{bbname} adlı bir siteyi keşfettim ve hemen kayıt oldum! Çok güzel bir site,sende gel! Site linki: {bburl}";

// Bug reports
$l['myfbconnect_reports'] = "Bug Hataları";
$l['myfbconnect_reports_date'] = "Gün";
$l['myfbconnect_reports_line'] = "Satır";
$l['myfbconnect_reports_file'] = "Dosya";
$l['myfbconnect_reports_code'] = "Kod";
$l['myfbconnect_reports_export'] = "Dışarı Aktar";
$l['myfbconnect_reports_delete'] = "Sil";
$l['myfbconnect_reports_delete_all'] = "Tüm hataları sil";

// Errors
$l['myfbconnect_error_needtoupdate'] = "Facebook ile Bağlan eklentisinin eski bir sürümünü kullanıyorsunuz. Lütfen <a href=\"index.php?module=config-settings&update=myfbconnect\">buraya</a> tıklayarak güncel sürümü kullanınız.";
$l['myfbconnect_error_nothingtodohere'] = "Facebook ile Bağlan eklentisi zaten güncel sürümde.";
$l['myfbconnect_error_port_443_not_open'] = "A connection test has been made, and your server's 443 port seems to be closed. Facebook needs port 443 open to communicate and authenticate users. This test might fail under certain circumstances: <b>you can still install the plugin and give it a try by clicking <a href='index.php?module=config-plugins&action=activate&plugin=myfbconnect&skip_port_check=true&my_post_key={1}'>here</a></b>, but keep in mind that the connection test has returned an invalid response. If:<br /><br />
<li>you are running on a <b>dedicated or premium hosting</b>, you most probably have access to a port manager or something similar. You can easily open 443 port on TCP protocol by accessing the manager.</li>
<li>you are running on a <b>shared hosting</b>, or you don't have access to a port manager, you must contact your host and ask for port 443 to be opened for you. This is the only way to let your users login and register with Facebook.</li>
The installation has been aborted for security reasons.";

// Success
$l['myfbconnect_success_updated'] = "Facebook ile Bağlan eklentisi başarıyla {1} sürümünden {2} sürümüne güncellenmiştir.. İyi İşti!";
$l['myfbconnect_success_deleted_reports'] = "Buh hataları başarıyla silindi.";

// Others
$l['myfbconnect_select_nofieldsavailable'] = "<span style='color: red'>Bu profil alanı mevcut değil. <b><a href='index.php?module=config-profile_fields'>Profil Alanı Oluştur</a></b>.</span>";