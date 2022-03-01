SELECT mhs_nama
FROM tb_mahasiswa as mhs, tb_mahasiswa_nilai as mNilai
WHERE mhs.mhs_id = mNilai.mhs_id
AND nilai=(SELECT max(nilai) FROM tb_mahasiswa_nilai as mNilai, tb_matakuliah as mk
           WHERE mNilai.mk_id = 2)
