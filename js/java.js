function validasiEmail(email)
{
	var validEmail = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
	if(validEmail.test(email))
	{
		return true;
	}
	return false;
}

function cekEmail()
{
	if(!validasiEmail(document.getElementById('email').value))
	{
		alert('Format Email yang dimasukkan salah');

	}
}

function cekPassword()
{
	var pass1 = document.getElementById('password').value;
	var pass2 = document.getElementById('newpassword').value;
        $_Session['password']="false";
	if(!validasiPassword(document.getElementById('newpassword').value))
	{
		alert('Format Re-Password yang dimasukkan salah');
	}
	else
	{
		if(pass1!=pass2)
		{
			alert('Password tidak sama');
		}
                else
                {
                         $_Session['password']="true";
                }
	}
        	
}

function cekPass()
{
	if(!validasiPassword(document.getElementById('password').value))
	{
		alert('Format Password yang dimasukkan salah');
	}
}

function validasiPassword(password)
{
	var validPass = /^[a-zA-Z0-9]/; 
	if(validPass.test(password))
	{
		return true
	}
	return false
}
function cekUser()
{
	if(!validasiPassword(document.getElementById('username').value))
	{
		alert('Format Username yang dimasukkan salah');
	}
}
function validasiTelepon()
{
	var validTelepon = /^[0-9]/; 
	if(!validTelepon.test(document.getElementById('nomorhp').value))
	{
		alert('Format Nomor HP yang dimasukkan salah');
	}
}
function validasiTanggal()
{
	var tanggal =  document.getElementById('tanggal').value;
	if(tanggal>31)
	{
		alert('Format Tanggal yang dimasukkan salah');
                $_Session['tanggal']="false";
	}
        else
        {
                $_Session['tanggal']="true";
        }
}
function wew()
{
document.getElementById('email').focus();
return false;
}

function validasi()
{
	if(document.getElementById('username').value == '')
	{
		alert('username tidak boleh kosong');
		document.getElementById('username').focus();
		return false;
	}
	if(document.getElementById('password').value == '')
	{
		alert('password tidak boleh kosong');
		document.getElementById('password').focus();
		return false;
	}
	if(document.getElementById('nama').value == '')
	{
		alert('nama tidak boleh kosong');
		document.getElementById('nama').focus();
		return false;
	}
	if(document.getElementById('tanggal').value == '')
	{
		alert('Tanggal tidak boleh kosong');
		document.getElementById('tanggal').focus();
		return false;
	}
	if(document.getElementById('tahun').value == '')
	{
		alert('Tahun tidak boleh kosong');
		document.getElementById('tahun').focus();
		return false;
	}
        if(document.getElementById('email').value == '')
	{
		alert('Email tidak boleh kosong');
		document.getElementById('email').focus();
		return false;
	}
}
function getCookie(c_name)
{
var i,x,y,ARRcookies=document.cookie.split(";");
for (i=0;i<ARRcookies.length;i++)
  {
  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  x=x.replace(/^\s+|\s+$/g,"");
  if (x==c_name)
    {
    return unescape(y);
    }
  }
}
function setCookie(c_name,value,exdays)
{
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}

function checkCookie()
{
	var username=getCookie("username");
	if (username!=null && username!="")
	{
		alert("Selamat Datang " + username);
	}
}
function klik()
{
	var username=document.getElementById('username').value;
	if (username!=null && username!="")
    {
		setCookie("username",username,1);
    }
}
function cek()
{
	var username=getCookie("username");
	if (username!=null && username!="")
	{
		document.write(username);
	}
	else
	{
		document.write("LOG IN");
	}
}

var dn;
c1 = new Image(); c1.src = "digital-clock/c1.gif";
c2 = new Image(); c2.src = "digital-clock/c2.gif";
c3 = new Image(); c3.src = "digital-clock/c3.gif";
c4 = new Image(); c4.src = "digital-clock/c4.gif";
c5 = new Image(); c5.src = "digital-clock/c5.gif";
c6 = new Image(); c6.src = "digital-clock/c6.gif";
c7 = new Image(); c7.src = "digital-clock/c7.gif";
c8 = new Image(); c8.src = "digital-clock/c8.gif";
c9 = new Image(); c9.src = "digital-clock/c9.gif";
c0 = new Image(); c0.src = "digital-clock/c0.gif";
cb = new Image(); cb.src = "digital-clock/cb.gif";
cam = new Image(); cam.src = "digital-clock/cam.gif";
cpm = new Image(); cpm.src = "digital-clock/cpm.gif";

function extract(h,m,s,type) 
{
	if (!document.images) return;
	if (h <= 9) 
	{
		document.images.a.src = cb.src;
		document.images.b.src = eval("c"+h+".src");
	}
	else 
	{
		document.images.a.src = eval("c"+Math.floor(h/10)+".src");
		document.images.b.src = eval("c"+(h%10)+".src");
	}
	if (m <= 9) 
	{
		document.images.d.src = c0.src;
		document.images.e.src = eval("c"+m+".src");
	}
	else 
	{
		document.images.d.src = eval("c"+Math.floor(m/10)+".src");
		document.images.e.src = eval("c"+(m%10)+".src");
	}
	if (s <= 9) 
	{
		document.g.src = c0.src;
		document.images.h.src = eval("c"+s+".src");
	}
	else 
	{
		document.images.g.src = eval("c"+Math.floor(s/10)+".src");
		document.images.h.src = eval("c"+(s%10)+".src");
	}
	if (dn == "AM") document.j.src = cam.src;
	else document.images.j.src = cpm.src;
}

function show3() 
{
	if (!document.images)
	return;
	var Digital = new Date();
	var hours = Digital.getHours();
	var minutes = Digital.getMinutes();
	var seconds = Digital.getSeconds();
	dn = "AM";
	if ((hours >= 12) && (minutes >= 1) || (hours >= 13)) 
	{
		dn = "PM";
		hours = hours-12;
	}
	if (hours == 0)
hours = 12;
extract(hours, minutes, seconds, dn);
setTimeout("show3()", 1000);
}

function masuk()
{
	document.write("HALO");
}