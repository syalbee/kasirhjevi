let url,
  user = $("#absenadmin").DataTable({
    responsive: !0,
    scrollX: !0,
    ajax: ABreadUrl,
    columnDefs: [{ searcable: !1, orderable: !1, targets: 0 }],
    order: [[1, "asc"]],
    columns: [
      { data: "nama" },
      { data: "tanggal" },
      { data: "jam" },
      { data: "jenis" },
      { data: "status" },
    ],
  });

function reloadTable() {
  user.ajax.reload();
}

