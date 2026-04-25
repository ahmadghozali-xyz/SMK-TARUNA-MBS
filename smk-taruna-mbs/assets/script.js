<script>
function openModal(img){
  document.getElementById('modal').style.display='flex';
  document.getElementById('modal-img').src=img.src;
}

function closeModal(){
  document.getElementById('modal').style.display='none';
}

fetch('api/get_kegiatan.php')
.then(res=>res.json())
.then(data=>{
  let el=document.getElementById('kegiatan-list');
  data.forEach(d=>{
    el.innerHTML+=`<div class="card">
      <h4>${d.judul}</h4>
      <p>${d.tanggal}</p>
    </div>`;
  });
});

fetch('api/get_struktur.php')
.then(res=>res.json())
.then(data=>{
  let el=document.getElementById('struktur-list');
  data.forEach(d=>{
    el.innerHTML+=`<div class="card">
      <h4>${d.nama}</h4>
      <p>${d.jabatan}</p>
    </div>`;
  });
});
</script>