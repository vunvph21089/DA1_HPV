
<table class="table align-middle" id="customerTable">
    <thead class="table-light text-muted">
        <tr>
            <th class="sort" data-sort="eamil">ID</th>
            <th class="sort" data-sort="customer_name">Tên</th>
            <th class="sort" data-sort="email">Ảnh</th>
            <th class="sort" data-sort="phone">Giá($)</th>
            <th class="sort" data-sort="date">Địa chỉ</th>
            <th class="sort" data-sort="status">Diện tích(m2)</th>
            <th class="sort" data-sort="action">Số phòng</th>
            <th class="sort" data-sort="action">Lượt xem</th>
            <th class="sort" data-sort="email">Loại</th>
            <th class="sort" data-sort="action">Người đăng</th>
            <th class="sort" data-sort="action">Action</th>
        </tr>
    </thead>
    <tbody class="list form-check-all">
        <tr>
            <?php
            foreach ($listbds as $bds) {
                extract($bds);
                $upbds = "index.php?act=fixbds&id=" . $id;
                $image = "../" . $bds['img'];
                echo  '<tr>
                            <td class="customer_name">' . $id . '</td>
                            <td class="customer_name">' . $name . '</td>
                            <td class="customer_name"><img src="' . $image . '" width="60" height="60"></td>
                            <td class="customer_name">' . $price . '</td>
                            <td class="customer_name">' . $location . '</td>
                            <td class="customer_name">' . $dientich . '</td>
                            <td class="customer_name">' . $sophong . '</td>
                            <td class="customer_name">' . $luotxem . '</td>
                            <td class="customer_name">' . $id_loaibds . '</td>
                            <td class="customer_name">' . $id_user . '</td>
                            <td>
                                <ul class="list-inline hstack gap-2 mb-0">
                                 <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                     <a href="' . $upbds . '">
                                         <i class="ri-pencil-fill fs-16"></i>
                                     </a>
                                 </li>
                                 
                             </ul>
                            </td>
                            </tr>';
            }
            ?>
        </tr>
    </tbody>
</table>