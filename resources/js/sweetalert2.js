import swal from 'sweetalert2';

window.showAlert = (type, message) => {
  swal.fire({
    icon: type,
    title: type.charAt(0).toUpperCase() + type.slice(1),
    text: message,
    timer: 3000,
    showConfirmButton: false
  });
};

window.confirmDelete = (callback) => {
  swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      callback();
    }
  });
};

window.confirmPermanentDelete = (url) => {
  swal.fire({
    title: 'Permanently delete this record?',
    text: "This action cannot be undone. The data will be lost forever.",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete permanently',
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = url;
    }
  });
};
