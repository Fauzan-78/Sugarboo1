const form = document.getElementById("form");
const nama = document.getElementById("name");
const nomor = document.getElementById("nomor");
const nomor2 = document.getElementById("nomor2");
const email = document.getElementById("email");
const lokasi = document.getElementById("lokasi");
const waktu = document.getElementById("waktu");
const pembayaran = document.getElementById("pembayaran");
const pembayaran1 = document.getElementById("pembayaran1");
const pembayaran2 = document.getElementById("pembayaran2");
const pembayaran3 = document.getElementById("pembayaran3");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  validateInputs();
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");
  inputControl.classList.add("error");
  inputControl.classList.remove("succes");

  errorDisplay.innerText = message;
};

const setSucces = (element) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");
  inputControl.classList.remove("error");
  inputControl.classList.add("succes");

  errorDisplay.innerText = "";
};

const isValidEmail = (email) => {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
};

const validatePhoneNumber = (nomor) => {
  var re = /^(\+62)8[1-9][0-9]{6,9}$/;

  return re.test(nomor);
};

const validateInputs = () => {
  const namavalue = nama.value.trim();
  const emailvalue = email.value.trim();
  const nomorvalue = nomor.value.trim();
  const nomorvalue2 = nomor2.value.trim();
  const waktuvalue = waktu.value.trim();
  const lokasivalue = lokasi.value.trim();
  const pembayaranvalue = pembayaran.value.trim();
  const pembayaran1value = pembayaran1.value.trim();
  const pembayaran2value = pembayaran2.value.trim();
  const pembayaran3value = pembayaran3.value.trim();

  if (namavalue === "") {
    setError(nama, "name is required");
  } else {
    setSucces(nama); 
  }
  
  if (emailvalue === "") {
    setError(email, "email is required");
  } else if (!isValidEmail(emailvalue)) {
    setError(email, "provide a valid email address");
  } else {
    setSucces(email);
  }

  if (nomorvalue === "") {
    setError(nomor, "nomor handphone is required");
  } else if (!validatePhoneNumber(nomorvalue)) {
    setError(nomor, "enter the phone number ini this format +628xxxxxxxxxx");
  } else {
    setSucces(nomor);
  }

  if (nomorvalue2 === "") {
    setError(nomor2, "nomor handphone is required");
  } else if (!validatePhoneNumber(nomorvalue2)) {
    setError(nomor2, "enter the phone number ini this format +628xxxxxxxxxx");
  } else {
    setSucces(nomor2);
  }

  if (waktuvalue === "") {
    setError(waktu, "Waktu pemesanan harus di isi");
  } else {
    setSucces(waktu);
  }

  if (lokasivalue === "") {
    setError(lokasi, "lokasi tujuan harus di isi");
  } else {
    setSucces(lokasi);
  }

  if (pembayaranvalue === "") {
    setError(pembayaran, "pembayaran harus di isi");
  } else {
    setSucces(pembayaran);
  }

  return true;
};
