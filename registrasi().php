public function registrasi()
{
	if ($this->session->userdata('email')) {
	redirect('user');
}
 //membuat rule untuk inputan nama agar tidak boleh kosong
dengan membuat pesan error dengan
 //bahasa sendiri yaitu 'Nama Belum diisi'
 $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', ['required' => 'Nama Belum diis!!'
 ]);