<?php 
class Mahasiswa {  
public string $nim; 
public string $nama; 
 
public function setNim(string $a) { 
$this->nim = $a;
} 
 
public function setNama(string $b) { 
$this->nama = $b; 
} 
}
class Krs extends Mahasiswa { 
 protected String $matakuliah;
    public function getNim() { 
    return $this->nim; 
    } 
    
    public function getNama() { 
    return $this->nama; 
    } 
public function setMataKuliah(String $c)
{
    $this->matakuliah->$c; 
}
}
class Nilai extends Krs { 
 private static int $nilai = 90;
    public function getMatakuliah() { 
    return $this->matakuliah; 
    } 
    
    public function getNilai() { 
    return self::$nilai; 
    } 
} 

 $nilai = new Nilai(); 
 
 // Memanggil class Mahasiswa 
 $nilai->setNim("17021000"); 
 $nilai->setNama("Faiza"); 
 
 // Memanggil class Krs 
 $nilai->
 setMatakuliah("Pemrograman Berbasis Web Lanjutan"); 
 
 echo "<p>NIM = " . $nilai->getNim() . "</p>"; 
 echo "<p>Nama = " . $nilai->getNama() . "</p>"; 
 echo "<p>Matakuliah = " . $nilai->
 getMatakuliah() . "</p>"; 
 echo "<p>Nilai = " . Nilai::getNilai(90) . "</p>";