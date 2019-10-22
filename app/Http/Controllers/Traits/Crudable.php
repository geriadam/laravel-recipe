<?php

namespace App\Http\Controllers\Traits;

trait Crudable
{
    public function flash($key, $message)
    {
        session()->flash($key, $message);
    }

    public function flashSuccessCreate($message = 'Yay, Data telah berhasil disimpan.')
    {
        $this->flash('success', $message);
    }

    public function flashSuccessUpdate($message = 'Yay, Data telah berhasil diperbarui.')
    {
        $this->flash('info', $message);
    }

    public function flashSuccessDelete($message = 'Yay, Data telah berhasil dihapus.')
    {
        $this->flash('warning', $message);
    }

    public function flashFailedSave($message = 'Oops, Data tidak berhasil disimpan.')
    {
        $this->flash('danger', $message);
    }
}
