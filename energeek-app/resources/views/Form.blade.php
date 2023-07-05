@extends('layout.main')

@section('container')
<form method="POST">
    <h2 class="text-center">Apply Lamaran</h2>
    <!-- Name input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form5Example1">Nama Lengkap</label>
      <input type="text" id="form5Example1" class="form-control" />
    </div>
    
    <!-- Jabatan -->
    <div class="form-outline mb-4">
      
      <label class="form-label" for="form5Example1">Jabatan</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Web Development</option>
        <option>Front End Development</option>
        <option>Back End Development</option>
      </select>
    </div>

    <!-- Telepon -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form5Example2">Telepon</label>
      <input type="email" id="form5Example2" class="form-control" />
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form5Example2">Email address</label>
      <input type="email" id="form5Example2" class="form-control" />
    </div>

    <!-- Jabatan -->
    <div class="form-outline mb-4">
      
      <label class="form-label" for="form5Example1">Tahun</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>1990</option>
        <option>1991</option>
        <option>1992</option>
        <option>1993</option>
        <option>1994</option>
        <option>1995</option>
        <option>1996</option>
        <option>1997</option>
        <option>1998</option>
        <option>1999</option>
        <option>2000</option>
        <option>2001</option>
      </select>
    </div>
  
    <!-- Jabatan -->
    <div class="form-outline mb-4">
      
      <label class="form-label" for="form5Example1">Skill</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>PHP</option>
        <option>Java</option>
        <option>Python</option>
        <option>JavaScript</option>
        <option>Mysql</option>
      </select>
    </div>

   
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Simpan</button>
  </form>
@endsection