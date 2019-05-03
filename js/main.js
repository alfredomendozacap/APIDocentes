;
const API_URL = `./app/docentes.php`,
  tBody = document.getElementById('Registers')

const template = ({cargo, perfil, ubigeo, institucion, nombres, apellidos, email, celular}) => {
  return `
    <td>${cargo}</td>
    <td>${perfil}</td>
    <td>${ubigeo}</td>
    <td>${institucion}</td>
    <td>${nombres}</td>
    <td>${apellidos}</td>
    <td>${email}</td>
    <td>${celular}</td>
    <td><label>Seleccionar</label><input type="checkbox" name="enviar[]"></td>
  `
}

const getTeachers = async (params) => {
  const res = await fetch(API_URL+params)
  const data = await res.json()
  return data
}

const showData = async (params = '') => {
  tBody.innerHTML = ''
  const teachers = await getTeachers(params)
  teachers.forEach(teacher => {
    const register = document.createElement('tr')
    register.id = teacher.id
    register.innerHTML = template(teacher)
    tBody.appendChild(register)
  });
}

