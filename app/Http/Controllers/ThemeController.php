<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use Illuminate\Support\Facades\File;

class ThemeController extends Controller
{
    public function enableThemeById(Request $request, $id)
    {
        $theme = Theme::findOrFail($id);
        // Temayı etkinleştirme işlemleri burada yapılabilir
    }

    public function disableTheme(Request $request, $id)
    {
        $theme = Theme::findOrFail($id);
        // Temayı devre dışı bırakma işlemleri burada yapılabilir
    }

    public function enableTheme(Request $request, $themeName = null)
{
    // Tema dosya adı
    $themeFileName = $themeName ? $themeName . '.css' : 'app.css';

    // Temanın dosya yolunu belirleyin
    $themePath = public_path('assets/' . $themeFileName);

    // Tema dosyasını etkinleştirme
    if (File::exists($themePath)) {
        // Tema dosyası varsa, tema dosyasını etkinleştir
        // Örneğin, etkin tema olarak belirleyebilirsiniz.
        // Burada gerçekleştirilecek işlem projenizin gereksinimlerine bağlı olacaktır.
        // Tema dosyasını etkinleştirme işlemleri burada yapılabilir.
        // Örneğin, tema dosyasını site genelinde kullanarak veya bir veritabanı alanı içinde kullanıcı tercihleri olarak saklayarak yapabilirsiniz.
    } else {
        // Tema dosyası bulunamadı hatası verilebilir veya uygun bir işlem gerçekleştirilebilir.
    }

    // Tema dosyası başarıyla etkinleştirildi veya hata durumunda uygun bir geri dönüş yapılmalıdır.
}
}
