@extends('layout.admin')
@section('content')
<table>
    <caption>Data Information Custommer</caption>
    <thead>
        tr>
        <th scope="col"></th>
        <th scope="col">Thông tin</th>
        <th scope="col">Chi tiết</th>
        <th scope="col">Thời gian</th>
        <th scope="col">Hành động</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($data_cus as $item)
        <tr style="background-color: #dacfe6;">
            <td data-label="Data 1" style="font-weight: bold;">HỌ TÊN</td>
            <td data-label="Data 2">{{ $item->name }}</td>
            <td data-label="Data 3">{{ $item->form_type == 'tu_van' ? 'Tư vấn' : 'Liên hệ' }}</td>
            <td data-label="Data 3">{{ $item->created_at->format('d/m/Y H:i:s') }}</td>
            <td data-label="Data 4">
                <a href="tel:{{ $item->phone }}" class="btn btn-primary btn-sm">
                    {{ $item->phone }}
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
@push('css')
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Open Sans", sans-serif;
  font-size: 14pt;
}

table {
  width: 100%;
  border-collapse: collapse;
  table-layout: fixed;
  caption {
    font-size: 1.5em;
    margin: 10px;
  }

  th,
  td {
    padding: 10px;
    text-align: center;
  }
  th {
    font-size: 1em;
  }
}

@media screen and (max-width: 640px) {
  table {
    border: 0;

    thead {
      position: absolute;
      width: 1px;
      height: 1px;
      border: none;
      overflow: hidden;
    }

    tr {
      display: block;
      border-bottom: 3px solid #f4f4f4;
      margin-bottom: 10px;
    }

    td {
      display: block;
      border-bottom: 1px solid #f4f4f4;
      text-align: right;

      &:before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;
      }

      &:last-child {
        border-bottom: 0;
      }
    }
  }
}

  </style>
@endpush
