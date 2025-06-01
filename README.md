## مشروع laravel crud using Repository pattern 

## ما هو Repository Pattern؟
هو نمط تصميم (Design Pattern) يُستخدم لفصل **منطق الوصول للبيانات** (مثل التعامل مع Eloquent أو الاستعلامات) عن بقية الطبقات في التطبيق مثل Controllers و Services.


# الهدف من استخدام نموذج Repository :
- فصل المسؤوليات : بدلاً من كتابة استعلامات Eloquent داخل الـ Controller أو Service، نضعها داخل Repository مخصص.
- سهولة التعديل : لو أردنا تغيير طريقة جلب البيانات (مثلاً من API بدلاً من قاعدة بيانات)، تغيّر فقط في الـ Repository.
- سهولة الاختبار: يمكننا اختبار الـ Service أو Controller باستخدام Repository وهمي (Mock).

# الفرق بين Service , Repository ؟
نستخدم  **Service**  لفصل منطق العمل عن الكونترولر مثلا إرسال إشعارات، تسجيل أحداث، التحقق من شروط معينة .(Business Logic)
نستخدم  **Repository** للوصول إلى البيانات والتعامل مع الـ Model (مثل عمليات إنشاء، قراءة، تحديث، حذف البيانات من قاعدة البيانات).(Data Access)



## هيكل المشروع

app/
├── Models/
│ └── Post.php
├── Repositories/
│ ├── PostRepositoryInterface.php
│ └── PostRepository.php
├── Services/
│ └── PostService.php
├── Http/
│ └── Controllers/
│ └── PostController.php
├── Http/
│ └── Requests/
│ ├── StorePostRequest.php
│ └── UpdatePostRequest.php
