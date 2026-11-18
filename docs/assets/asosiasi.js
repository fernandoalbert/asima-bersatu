
document.addEventListener('DOMContentLoaded',function(){
  var t=document.querySelector('.menu-toggle'),n=document.getElementById('mainNav');
  if(t&&n)t.addEventListener('click',function(){n.classList.toggle('is-open');t.setAttribute('aria-expanded',n.classList.contains('is-open'));});
  var counters=document.querySelectorAll('[data-count]');
  if(counters.length&&'IntersectionObserver' in window){
    var io=new IntersectionObserver(function(es){es.forEach(function(e){if(!e.isIntersecting)return;var el=e.target,end=parseInt(el.dataset.count,10),start=0,dur=900,st=null;
      function step(ts){if(!st)st=ts;var p=Math.min((ts-st)/dur,1);el.textContent=Math.floor(p*end)+(p<1?'+':'+');if(p<1)requestAnimationFrame(step);}
      requestAnimationFrame(step);io.unobserve(el);});},{threshold:.5});
    counters.forEach(function(c){io.observe(c);});
  }
  var f=document.getElementById('joinForm');
  if(f)f.addEventListener('submit',function(e){e.preventDefault();var text='Halo ASIMA Bersatu, saya mau gabung. Nama: '+f.nama.value+', Kota: '+f.kota.value+', Media/Organisasi: '+f.media.value+', Email: '+f.email.value;window.location.href='https://wa.me/628211712295?text='+encodeURIComponent(text);});
  var p=document.getElementById('articleDetail');
  if(p){var id=new URLSearchParams(location.search).get('id')||'1';var d=ARTICLES[parseInt(id,10)-1]||ARTICLES[0];document.getElementById('aTitle').textContent=d.title;document.getElementById('aMeta').textContent=d.cat+' · '+d.date+' · '+d.read;document.getElementById('aBody').innerHTML=d.body;}
  var m=document.getElementById('memberDetail');
  if(m){var mid=new URLSearchParams(location.search).get('id')||'0';var x=MEMBERS[parseInt(mid,10)]||MEMBERS[0];document.getElementById('mName').textContent=x.name;document.getElementById('mInfo').textContent=x.info;}
});
var ARTICLES=[
 {title:'ASIMA Bersatu Gelar Forum Nasional Simalungun 2026 di Pematang Raya',cat:'Kegiatan',date:'12 November 2026',read:'4 menit baca',body:'<p>Forum ini mengangkat tema “Bersatu, Bergerak, Berdampak untuk Simalungun” dan menjadi ruang dialog strategis bagi pengurus DPD, DPC, PAC,serta mitra pembangunan daerah.</p><p>Ketua Umum DPP ASIMA Bersatu Pardi Purba menekankan pentingnya sinergi seluruh struktur organisasi untuk mempercepat pembangunan Simalungun.</p>'},
 {title:'Dorong Regulasi Platform Digital, ASIMA Sampaikan Paparan ke DPRD',cat:'Advokasi',date:'5 November 2026',read:'6 menit baca',body:'<p>Asosiasi menekankan pentingnya perlindungan bagi organisasi kemasyarakatan dan publik independen dalam ekosistem digital.</p>'},
 {title:'Laporan Tren Media & Informasi Simalungun Kuartal III 2026 Dirilis',cat:'Riset',date:'28 Oktober 2026',read:'5 menit baca',body:'<p>Riset terbaru menunjukkan pertumbuhan signifikan pada segmen informasi digital dan newsletter komunitas.</p>'}
];
var MEMBERS=[
 {name:'MediaNusa Simalungun',info:'Pembaca: 2,4 jt · Bergabung 2014'},
 {name:'DigitalKita Raya',info:'Pembaca: 860 rb · Bergabung 2017'},
 {name:'BeritaRakyat Simalungun',info:'Pembaca: 1,7 jt · Bergabung 2015'},
 {name:'InfoNasional Simalungun',info:'Pembaca: 3,1 jt · Bergabung 2013'}
];
