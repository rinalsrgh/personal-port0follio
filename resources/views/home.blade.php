<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/table-06/css/style.css">
    <style>
        .floating-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #007bff;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            font-size: 24px;
        }
        .floating-btn:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>
</head>
<body>
<section class="ftco-section">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-4">
                <h2 class="heading-section">Project Data</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <thead class="thead-primary">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Link</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="project-table-body">
                            <!-- Data akan diisi oleh JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <a href="/project/tambah" class="floating-btn">
        <i class="fas fa-plus"></i>
    </a>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        fetch('project/getlist')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('project-table-body');
                tableBody.innerHTML = ''; // Clear any existing rows
                data.forEach(project => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${project.id}</td>
                        <td>${project.judul}</td>
                        <td>${project.deskripsi}</td>
                        <td><a href="${project.link}" target="_blank">${project.link}</a></td>
                        <td><img src="${project.image}" width="100"></td>
                        <td>
                            <a href="/project/edit/${project.id}" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="/project/hapus/${project.id}" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    `;
                    tableBody.appendChild(row);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>
</body>
</html>
