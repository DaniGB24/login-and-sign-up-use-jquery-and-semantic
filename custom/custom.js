
   function validasisignup() {
      $('.ui.dropdown').dropdown();
      $('.ui.form')
        .form({
          fields: {
            namadepan: {
              identifier  : 'namadepan',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Nama Anda'
                }
              ]
            },
            namabelakang: {
              identifier  : 'namabelakang',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Nama Anda'
                }
              ]
            },
            alamat: {
              identifier  : 'alamat',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Alamat Anda'
                }
              ]
            },
            agama: {
              identifier  : 'agama',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Pilih Agama Anda'
                }
              ]
            },
            umur: {
              identifier  : 'umur',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Umur Anda'
                },
                {
                  type   : 'number',
                  prompt : 'Isikan Umur Anda Dengan Benar'
                }
              ]
            },
            status: {
              identifier  : 'status',
              rules: [                
                {
                  type   : 'empty',
                  prompt : 'Pilih Salah Satu Status'
                }
              ]
            },
            username: {
              identifier  : 'username',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Username Anda'
                }

              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Password Anda'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Masukkan Password Minimal 6 Karakter'
                }
              ]
            },
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'email',
                  prompt : 'Masukkan Email Dengan Benar'
                },
                {
                  type   : 'empty',
                  prompt : 'Isikan Email Anda'
                }
              ]
            },
            hakakses: {
              identifier  : 'hakakses',
              rules :[
                {
                  type    : 'empty',
                  prompt  : 'Pilih Salah Satu Hak Akses'
        }
              ]
            }            
          }
        })
      ;
    })
  ;