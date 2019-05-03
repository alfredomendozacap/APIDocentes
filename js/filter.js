;
const selectPerfil = document.getElementById('perfil')

selectPerfil.addEventListener('change', e => {
  let perfil = e.target.value
  if (perfil) {
    showData(`?perfil=${perfil}`)
  } else {
    showData()
  }
})

showData()