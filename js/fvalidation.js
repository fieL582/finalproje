function formKontrol()
{
	// Toplu alert için hatalar
	var hatalar = new Array();
	var tag = "<!> ";

	// Ad boşluk kontrol
	let ad = document.forms["kayit"]["ad"].value;
	ad = ad.trim();
	if (ad == "" || ad == null)
	{
		hatalar.push(tag + "Ad kısmı boş geçilemez!");
	}

	// Soyad boşluk kontrol
	let soyad = document.forms["kayit"]["soyad"].value;
	soyad = soyad.trim();
	if (soyad == "" || soyad == null)
	{
		hatalar.push(tag + "Soyad kısmı boş geçilemez!");
	}

	// E-Posta boşluk ve geçerlilik kontrol
	let eposta = document.forms["kayit"]["eposta"].value;
	eposta = eposta.trim();
	let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

	if (eposta == "" || eposta == null)
	{
		hatalar.push(tag + "E-Posta kısmı boş geçilemez!");
	}
	
	else if (reg.test(eposta) == false)
	{
		hatalar.push(tag + "Lütfen geçerli bir e-posta adresi girin!");
	}

	// Şifre boşluk ve maksimum 20 karakter kontrol
	let sifre = document.forms["kayit"]["sifre"].value;
	sifre = sifre.trim();
	if (sifre == "" || sifre == null)
	{
		hatalar.push(tag + "Şifre kısmı boş geçilemez!");
	}

	else if (sifre.length > 20)
	{
		hatalar.push(tag + "Şifre maksimum 20 karakterden oluşabilir!");
	}

	// Şifre tekrar boşluk kontrol
	let stekrar = document.forms["kayit"]["stekrar"].value;
	stekrar = stekrar.trim();
	if (stekrar == "" || stekrar == null)
	{
		hatalar.push(tag + "Şifre (Tekrar) kısmı boş geçilemez!");
	}

	// Doğum tarihi boşluk kontrol
	let dtarih = document.forms["kayit"]["dtarih"].value;
	dtarih = dtarih.trim();
	if (dtarih == "" || dtarih == null)
	{
		hatalar.push(tag + "Doğum tarihi kısmı boş geçilemez!");
	}

	// Toplu hataları yazdırma
	if (hatalar.length > 0)
	{
		let mesaj = "";
		for (var i = 0; i < hatalar.length; i++)
		{
			mesaj += hatalar[i] + "\n";
		}
		window.alert(mesaj);
		return false;
	}
}