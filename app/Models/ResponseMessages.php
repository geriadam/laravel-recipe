<?php

namespace App\Models;

class ResponseMessages
{
    const RESPONSE_API_INDEX = "Data Berhasil di Muat";
    const RESPONSE_API_CREATE = "Data Berhasil di Buat";
    const RESPONSE_API_UPDATE = "Data Berhasil di Ubah";
    const RESPONSE_API_DELETE = "Data Berhasil di Hapus";
    const RESPONSE_API_FAILED_INDEX = "Data Gagal di Muat";
    const RESPONSE_API_FAILED_CREATE = "Data Gagal di Buat";
    const RESPONSE_API_FAILED_UPDATE = "Data Gagal di Ubah";
    const RESPONSE_API_FAILED_DELETE = "Data Gagal di Hapus";
    const RESPONSE_API_ERROR_CREATE = "Data Gagal di Simpan dengan Error";
    const RESPONSE_API_ERROR_UPDATE = "Data Gagal di Ubah dengan Error";
}
