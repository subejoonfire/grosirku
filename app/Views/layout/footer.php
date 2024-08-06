<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="resource/dropdown.js"></script>
    <script src="resource/sidebar.js"></script>
    <script>
      const myModal = document.getElementById('myModal')
      const myInput = document.getElementById('myInput')
      myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
      })
    </script>
  </footer>
</body>

</html>