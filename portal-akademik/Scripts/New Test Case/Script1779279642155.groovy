import static com.kms.katalon.core.checkpoint.CheckpointFactory.findCheckpoint
import static com.kms.katalon.core.testcase.TestCaseFactory.findTestCase
import static com.kms.katalon.core.testdata.TestDataFactory.findTestData
import static com.kms.katalon.core.testobject.ObjectRepository.findTestObject
import static com.kms.katalon.core.testobject.ObjectRepository.findWindowsObject
import com.kms.katalon.core.checkpoint.Checkpoint as Checkpoint
import com.kms.katalon.core.cucumber.keyword.CucumberBuiltinKeywords as CucumberKW
import com.kms.katalon.core.mobile.keyword.MobileBuiltInKeywords as Mobile
import com.kms.katalon.core.model.FailureHandling as FailureHandling
import com.kms.katalon.core.testcase.TestCase as TestCase
import com.kms.katalon.core.testdata.TestData as TestData
import com.kms.katalon.core.testng.keyword.TestNGBuiltinKeywords as TestNGKW
import com.kms.katalon.core.testobject.TestObject as TestObject
import com.kms.katalon.core.webservice.keyword.WSBuiltInKeywords as WS
import com.kms.katalon.core.webui.keyword.WebUiBuiltInKeywords as WebUI
import com.kms.katalon.core.windows.keyword.WindowsBuiltinKeywords as Windows
import internal.GlobalVariable as GlobalVariable
import org.openqa.selenium.Keys as Keys

WebUI.openBrowser('')

WebUI.closeBrowser()

WebUI.openBrowser('')

WebUI.navigateToUrl('https://katalon-demo-cura.herokuapp.com/127.0.0.1:8000')

WebUI.openBrowser('')

WebUI.closeBrowser()

WebUI.openBrowser('')

WebUI.navigateToUrl('https://katalon-demo-cura.herokuapp.com/127.0.0.1:8000')

WebUI.openBrowser('')

WebUI.navigateToUrl('http://127.0.0.1:8000/')

WebUI.click(findTestObject('Object Repository/Page_Portal Akademik - PeTIK Jombang/a_Masuk Portal'))

WebUI.setText(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Email_email'), 'admin@petik.ac.id')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Password_password'), 'hUKwJTbofgPU9eVlw/CnDQ==')

WebUI.sendKeys(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Password_password'), Keys.chord(
        Keys.ENTER))

WebUI.click(findTestObject('Object Repository/Page_Admin Dashboard - Portal Akademik PeTIK/div_Total Mahasantri                            8'))

WebUI.click(findTestObject('Object Repository/Page_Admin Dashboard - Portal Akademik PeTIK/h3_1'))

WebUI.click(findTestObject('Object Repository/Page_Admin Dashboard - Portal Akademik PeTIK/h3_4'))

WebUI.click(findTestObject('Object Repository/Page_Admin Dashboard - Portal Akademik PeTIK/div_Mata Kuliah                            4'))

WebUI.click(findTestObject('Object Repository/Page_Admin Dashboard - Portal Akademik PeTIK/p_Mata Kuliah'))

WebUI.click(findTestObject('Object Repository/Page_Admin Dashboard - Portal Akademik PeTIK/i_Selamat datang, Admin PeTIK_bi bi-person-_c202ff'))

WebUI.click(findTestObject('Object Repository/Page_Admin Dashboard - Portal Akademik PeTIK/h6_Informasi Sistem'))

WebUI.click(findTestObject('Object Repository/Page_Admin Dashboard - Portal Akademik PeTIK/p_Portal Akademik PeTIK Jombang siap diguna_bd15db'))

WebUI.click(findTestObject('Object Repository/Page_Admin Dashboard - Portal Akademik PeTIK/a_Mahasantri'))

WebUI.click(findTestObject('Object Repository/Page_Data Mahasantri - Portal Academic PeTIK/i_Aktif_bi bi-pencil'))

WebUI.setText(findTestObject('Object Repository/Page_Edit Mahasantri - Portal Akademik PeTIK/textarea_Alamat_address'), 
    'Amsterdam, Belanda\n')

WebUI.click(findTestObject('Object Repository/Page_Edit Mahasantri - Portal Akademik PeTIK/button_Perbarui'))

WebUI.click(findTestObject('Object Repository/Page_Data Mahasantri - Portal Academic PeTIK/a_Tambah Mahasantri'))

WebUI.click(findTestObject('Object Repository/Page_Tambah Mahasantri - Portal Akademik PeTIK/a_Kembali'))

WebUI.click(findTestObject('Object Repository/Page_Data Mahasantri - Portal Academic PeTIK/td_leogmail.com'))

WebUI.click(findTestObject('Object Repository/Page_Data Mahasantri - Portal Academic PeTIK/td_hakimgmail.com'))

WebUI.click(findTestObject('Object Repository/Page_Data Mahasantri - Portal Academic PeTIK/td_fardhanyundrgmail.com'))

WebUI.click(findTestObject('Object Repository/Page_Data Mahasantri - Portal Academic PeTIK/td_alanagmail.com'))

WebUI.click(findTestObject('Object Repository/Page_Data Mahasantri - Portal Academic PeTIK/td_leogmail.com'))

WebUI.click(findTestObject('Object Repository/Page_Data Mahasantri - Portal Academic PeTIK/td_alfangmail.com'))

WebUI.click(findTestObject('Object Repository/Page_Data Mahasantri - Portal Academic PeTIK/td_febriangmail.com'))

WebUI.click(findTestObject('Object Repository/Page_Data Mahasantri - Portal Academic PeTIK/td_dzulpetik.ac.id'))

WebUI.click(findTestObject('Object Repository/Page_Data Mahasantri - Portal Academic PeTIK/i_Logout_bi bi-list fs-4'))

WebUI.click(findTestObject('Object Repository/Page_Data Mahasantri - Portal Academic PeTIK/a_Dosen'))

WebUI.click(findTestObject('Object Repository/Page_Data Dosen - Portal Akademik PeTIK/a_Tambah Dosen'))

WebUI.setText(findTestObject('Object Repository/Page_Tambah Dosen - Portal Akademik PeTIK/input__name'), 'Febby Cahya Triandra')

WebUI.setText(findTestObject('Object Repository/Page_Tambah Dosen - Portal Akademik PeTIK/input__nip'), '3603190585')

WebUI.setText(findTestObject('Object Repository/Page_Tambah Dosen - Portal Akademik PeTIK/input__email'), 'febbytriandra@gmail.com')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Tambah Dosen - Portal Akademik PeTIK/input__password'), 'T7P6Iy2owT2RumJWObcr8A==')

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Dosen - Portal Akademik PeTIK/select_-- Pilih Jurusan --                 _225aaa'), 
    '2', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Dosen - Portal Akademik PeTIK/select_-- Pilih --                         _83ecf0'), 
    'male', true)

WebUI.click(findTestObject('Object Repository/Page_Tambah Dosen - Portal Akademik PeTIK/button_Simpan'))

WebUI.click(findTestObject('Object Repository/Page_Data Dosen - Portal Akademik PeTIK/button_Dosen berhasil ditambahkan_btn-close'))

WebUI.click(findTestObject('Object Repository/Page_Data Dosen - Portal Akademik PeTIK/i_Logout_bi bi-list fs-4'))

WebUI.click(findTestObject('Object Repository/Page_Data Dosen - Portal Akademik PeTIK/a_Mata Kuliah'))

WebUI.click(findTestObject('Object Repository/Page_Mata Kuliah - Portal Akademik PeTIK/a_Tambah Mata Kuliah'))

WebUI.click(findTestObject('Object Repository/Page_Tambah Mata Kuliah - Portal Akademik PeTIK/a_Kembali'))

WebUI.click(findTestObject('Object Repository/Page_Mata Kuliah - Portal Akademik PeTIK/a_Tambah Mata Kuliah'))

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Mata Kuliah - Portal Akademik PeTIK/select_-- Pilih Jurusan --                 _225aaa'), 
    '1', true)

WebUI.setText(findTestObject('Object Repository/Page_Tambah Mata Kuliah - Portal Akademik PeTIK/input__code'), 'MKPPL003')

WebUI.setText(findTestObject('Object Repository/Page_Tambah Mata Kuliah - Portal Akademik PeTIK/input__name'), 'Pemrograman PHP')

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Mata Kuliah - Portal Akademik PeTIK/select_-- Pilih SKS --                     _821444'), 
    '4', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Mata Kuliah - Portal Akademik PeTIK/select_-- Pilih Semester --                _004bd0'), 
    '3', true)

WebUI.click(findTestObject('Object Repository/Page_Tambah Mata Kuliah - Portal Akademik PeTIK/button_Simpan'))

WebUI.click(findTestObject('Object Repository/Page_Mata Kuliah - Portal Akademik PeTIK/i_Aktif_bi bi-pencil'))

WebUI.doubleClick(findTestObject('Object Repository/Page_Edit Mata Kuliah - Portal Akademik PeTIK/input__name'))

WebUI.setText(findTestObject('Object Repository/Page_Edit Mata Kuliah - Portal Akademik PeTIK/input__name'), 'Pemrograman Python')

WebUI.setText(findTestObject('Object Repository/Page_Edit Mata Kuliah - Portal Akademik PeTIK/input__code'), 'MKPPL004')

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Edit Mata Kuliah - Portal Akademik PeTIK/select_-- Pilih Semester --                _8aa67a'), 
    '4', true)

WebUI.click(findTestObject('Object Repository/Page_Edit Mata Kuliah - Portal Akademik PeTIK/button_Perbarui'))

WebUI.click(findTestObject('Object Repository/Page_Mata Kuliah - Portal Akademik PeTIK/button_Mata kuliah berhasil diperbarui_btn-close'))

WebUI.click(findTestObject('Object Repository/Page_Mata Kuliah - Portal Akademik PeTIK/i_Logout_bi bi-list fs-4'))

WebUI.click(findTestObject('Object Repository/Page_Mata Kuliah - Portal Akademik PeTIK/a_Jadwal'))

WebUI.click(findTestObject('Object Repository/Page_Jadwal Kuliah - Portal Akademik PeTIK/a_Tambah Jadwal'))

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/select_-- Pilih Mata Kuliah --             _37c9d0'), 
    '2', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/select_-- Pilih Dosen --                   _5fddfb'), 
    '1', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/select_-- Pilih Hari --                    _5de6a6'), 
    'tuesday', true)

WebUI.setText(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/input_Ruangan_room'), 'Lab PPL')

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/select_-- Pilih Semester --                _0bf9eb'), 
    '2', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/select_-- Pilih Tahun --                   _1e0bac'), 
    '2025', true)

WebUI.click(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/button_Simpan'))

WebUI.click(findTestObject('Object Repository/Page_Jadwal Kuliah - Portal Akademik PeTIK/button_Jadwal berhasil ditambahkan_btn-close'))

WebUI.click(findTestObject('Object Repository/Page_Jadwal Kuliah - Portal Akademik PeTIK/a_Tambah Jadwal'))

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/select_-- Pilih Mata Kuliah --             _37c9d0'), 
    '4', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/select_-- Pilih Dosen --                   _5fddfb'), 
    '2', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/select_-- Pilih Hari --                    _5de6a6'), 
    'monday', true)

WebUI.setText(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/input_Ruangan_room'), 'Lab PPL')

WebUI.doubleClick(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/input_Ruangan_room'))

WebUI.setText(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/input_Ruangan_room'), 'Lab DM')

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/select_-- Pilih Semester --                _0bf9eb'), 
    '1', true)

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/select_-- Pilih Tahun --                   _1e0bac'), 
    '2025', true)

WebUI.click(findTestObject('Object Repository/Page_Tambah Jadwal - Portal Akademik PeTIK/button_Simpan'))

WebUI.click(findTestObject('Object Repository/Page_Jadwal Kuliah - Portal Akademik PeTIK/button_Jadwal berhasil ditambahkan_btn-close'))

WebUI.click(findTestObject('Object Repository/Page_Jadwal Kuliah - Portal Akademik PeTIK/i_Logout_bi bi-list fs-4'))

WebUI.click(findTestObject('Object Repository/Page_Jadwal Kuliah - Portal Akademik PeTIK/a_Pengumuman'))

WebUI.click(findTestObject('Object Repository/Page_Pengumuman - Portal Akademik PeTIK/i_Logout_bi bi-list fs-4'))

WebUI.click(findTestObject('Object Repository/Page_Pengumuman - Portal Akademik PeTIK/button_Logout'))

WebUI.click(findTestObject('Object Repository/Page_Portal Akademik - PeTIK Jombang/a_Masuk Portal'))

WebUI.setText(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Email_email'), 'fardhanyundr@gmail.com')

WebUI.sendKeys(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Email_email'), Keys.chord(Keys.ENTER))

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Password_password'), 'FdGe6Ca5E/Q2Ng6NPI7s4Q==')

WebUI.sendKeys(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Password_password'), Keys.chord(
        Keys.ENTER))

WebUI.click(findTestObject('Object Repository/Page_Student Dashboard - Portal Akademik PeTIK/i_Logout_bi bi-list fs-4'))

WebUI.click(findTestObject('Object Repository/Page_Student Dashboard - Portal Akademik PeTIK/a_Data Pribadi'))

WebUI.click(findTestObject('Object Repository/Page_Data Pribadi - Portal Akademik PeTIK/input_Tempat Lahir_birth_place'))

WebUI.doubleClick(findTestObject('Object Repository/Page_Data Pribadi - Portal Akademik PeTIK/input_Tempat Lahir_birth_place'))

WebUI.setText(findTestObject('Object Repository/Page_Data Pribadi - Portal Akademik PeTIK/input_Tempat Lahir_birth_place'), 
    'Oxford, london')

WebUI.click(findTestObject('Object Repository/Page_Data Pribadi - Portal Akademik PeTIK/button_Simpan Perubahan'))

WebUI.click(findTestObject('Object Repository/Page_Data Pribadi - Portal Akademik PeTIK/button_Data pribadi berhasil diperbarui_btn-close'))

WebUI.click(findTestObject('Object Repository/Page_Data Pribadi - Portal Akademik PeTIK/div_Lihat dan perbarui data pribadi kamu_bg_adbe2a'))

WebUI.click(findTestObject('Object Repository/Page_Data Pribadi - Portal Akademik PeTIK/h5_Fardhan Maulana Yunandar'))

WebUI.click(findTestObject('Object Repository/Page_Data Pribadi - Portal Akademik PeTIK/i_Logout_bi bi-list fs-4'))

WebUI.click(findTestObject('Object Repository/Page_Data Pribadi - Portal Akademik PeTIK/a_Jadwal Kuliah'))

WebUI.click(findTestObject('Object Repository/Page_Jadwal Kuliah - Portal Akademik PeTIK/button_Logout_btnToggleSidebar'))

WebUI.click(findTestObject('Object Repository/Page_Jadwal Kuliah - Portal Akademik PeTIK/a_Presensi'))

WebUI.click(findTestObject('Object Repository/Page_Presensi - Portal Akademik PeTIK/i_Logout_bi bi-list fs-4'))

WebUI.click(findTestObject('Object Repository/Page_Presensi - Portal Akademik PeTIK/a_Nilai'))

WebUI.click(findTestObject('Object Repository/Page_Nilai - Portal Akademik PeTIK/button_Logout_btnToggleSidebar'))

WebUI.click(findTestObject('Object Repository/Page_Nilai - Portal Akademik PeTIK/a_Materi'))

WebUI.click(findTestObject('Object Repository/Page_Materi - Portal Akademik PeTIK/a_Download'))

WebUI.switchToWindowTitle('Materi - Portal Akademik PeTIK')

WebUI.click(findTestObject('Object Repository/Page_Materi - Portal Akademik PeTIK/i_Logout_bi bi-list fs-4'))

WebUI.click(findTestObject('Object Repository/Page_Materi - Portal Akademik PeTIK/a_Dashboard'))

WebUI.click(findTestObject('Object Repository/Page_Student Dashboard - Portal Akademik PeTIK/button_Logout_btnToggleSidebar'))

WebUI.click(findTestObject('Object Repository/Page_Student Dashboard - Portal Akademik PeTIK/button_Logout'))

WebUI.click(findTestObject('Object Repository/Page_Portal Akademik - PeTIK Jombang/a_Masuk'))

WebUI.setText(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Email_email'), 'alfajri@gmail.com')

WebUI.sendKeys(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Email_email'), Keys.chord(Keys.ENTER))

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Password_password'), '5c1ckgxbUT5DKZzQaGxCxw==')

WebUI.sendKeys(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Password_password'), Keys.chord(
        Keys.ENTER))

WebUI.setText(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Email_email'), 'admin@petik.ac.id')

WebUI.sendKeys(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Email_email'), Keys.chord(Keys.ENTER))

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Password_password'), 'hUKwJTbofgPU9eVlw/CnDQ==')

WebUI.sendKeys(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Password_password'), Keys.chord(
        Keys.ENTER))

WebUI.click(findTestObject('Object Repository/Page_Admin Dashboard - Portal Akademik PeTIK/button_Logout_btnSidebarToggle'))

WebUI.click(findTestObject('Object Repository/Page_Admin Dashboard - Portal Akademik PeTIK/a_Dosen'))

WebUI.click(findTestObject('Object Repository/Page_Data Dosen - Portal Akademik PeTIK/i_Aktif_bi bi-pencil'))

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Edit Dosen - Portal Akademik PeTIK/input_(kosongkan jika tidak                _ec05e0'), 
    '5c1ckgxbUT5DKZzQaGxCxw==')

WebUI.sendKeys(findTestObject('Object Repository/Page_Edit Dosen - Portal Akademik PeTIK/input_(kosongkan jika tidak                _ec05e0'), 
    Keys.chord(Keys.ENTER))

WebUI.click(findTestObject('Object Repository/Page_Data Dosen - Portal Akademik PeTIK/button_Dosen berhasil ditambahkan_btn-close'))

WebUI.click(findTestObject('Object Repository/Page_Data Dosen - Portal Akademik PeTIK/button_Logout_btnSidebarToggle'))

WebUI.click(findTestObject('Object Repository/Page_Data Dosen - Portal Akademik PeTIK/button_Logout'))

WebUI.click(findTestObject('Object Repository/Page_Portal Akademik - PeTIK Jombang/i_Masuk_bi bi-box-arrow-in-right me-2'))

WebUI.setText(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Email_email'), 'alfajri@gmail.com')

WebUI.sendKeys(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Email_email'), Keys.chord(Keys.ENTER))

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Password_password'), '5c1ckgxbUT5DKZzQaGxCxw==')

WebUI.sendKeys(findTestObject('Object Repository/Page_Login  Portal Akademik PeTIK/input_Password_password'), Keys.chord(
        Keys.ENTER))

WebUI.click(findTestObject('Object Repository/Page_Lecturer Dashboard - Portal Akademik PeTIK/span_Portal Akademik PeTIK_navbar-toggler-icon'))

WebUI.click(findTestObject('Object Repository/Page_Lecturer Dashboard - Portal Akademik PeTIK/a_Jadwal Mengajar'))

WebUI.click(findTestObject('Object Repository/Page_Jadwal Kuliah - Portal Akademik PeTIK/button_Portal Akademik PeTIK_btnSidebarToggle'))

WebUI.click(findTestObject('Object Repository/Page_Jadwal Kuliah - Portal Akademik PeTIK/a_Presensi_1'))

WebUI.click(findTestObject('Object Repository/Page_Presensi - Portal Academik PeTIK/a_Isi Presensi'))

WebUI.click(findTestObject('Object Repository/Page_Isi Presensi - Portal Akademik PeTIK/button_Simpan Presensi'))

WebUI.click(findTestObject('Object Repository/Page_Presensi - Portal Academik PeTIK/a_Input Nilai'))

WebUI.click(findTestObject('Object Repository/Page_Input Nilai - Portal Akademik PeTIK/a_Input Nilai'))

WebUI.setText(findTestObject('Object Repository/Page_Input Nilai - Portal Akademik PeTIK/input_Fardhan Maulana Yunandar_grades1assignment'), 
    '100')

WebUI.setText(findTestObject('Object Repository/Page_Input Nilai - Portal Akademik PeTIK/input_Fardhan Maulana Yunandar_grades1midterm'), 
    '100')

WebUI.click(findTestObject('Object Repository/Page_Input Nilai - Portal Akademik PeTIK/td_Fardhan Maulana Yunandar_text-center'))

WebUI.setText(findTestObject('Object Repository/Page_Input Nilai - Portal Akademik PeTIK/input_Fardhan Maulana Yunandar_grades1final_exam'), 
    '100')

WebUI.setText(findTestObject('Object Repository/Page_Input Nilai - Portal Akademik PeTIK/input_Muhammad Miftahul Huda_grades2assignment'), 
    '20')

WebUI.setText(findTestObject('Object Repository/Page_Input Nilai - Portal Akademik PeTIK/input_Muhammad Miftahul Huda_grades2midterm'), 
    '15')

WebUI.setText(findTestObject('Object Repository/Page_Input Nilai - Portal Akademik PeTIK/input_Muhammad Miftahul Huda_grades2final_exam'), 
    '35')

WebUI.click(findTestObject('Object Repository/Page_Input Nilai - Portal Akademik PeTIK/button_Simpan Nilai'))

WebUI.click(findTestObject('Object Repository/Page_Input Nilai - Portal Akademik PeTIK/a_Materi'))

WebUI.click(findTestObject('Object Repository/Page_Materi - Portal Akademik PeTIK/a_Upload Materi'))

WebUI.selectOptionByValue(findTestObject('Object Repository/Page_Upload Materi - Portal Akademik PeTIK/select_-- Pilih Mata Kuliah --             _0a0014'), 
    '2', true)

WebUI.setText(findTestObject('Object Repository/Page_Upload Materi - Portal Akademik PeTIK/input__meeting_number'), '2')

WebUI.setText(findTestObject('Object Repository/Page_Upload Materi - Portal Akademik PeTIK/input__title'), '')

WebUI.click(findTestObject('Object Repository/Page_Upload Materi - Portal Akademik PeTIK/input__title'))

WebUI.setText(findTestObject('Object Repository/Page_Upload Materi - Portal Akademik PeTIK/input__meeting_number'), '1')

WebUI.setText(findTestObject('Object Repository/Page_Upload Materi - Portal Akademik PeTIK/input__title'), 'Pemahaman database MySQL')

WebUI.click(findTestObject('Object Repository/Page_Upload Materi - Portal Akademik PeTIK/button_Upload'))

WebUI.click(findTestObject('Object Repository/Page_Materi - Portal Akademik PeTIK/button_Logout'))

WebUI.click(findTestObject('Object Repository/Page_Portal Akademik - PeTIK Jombang/a_Daftar Maba'))

