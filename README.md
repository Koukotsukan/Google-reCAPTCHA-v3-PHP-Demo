# **中文版：**

这是一个**谷歌验证码V3**的测试Demo，这是[我的Demo](https://demo.niuzhaohang.top/googlerecaptchav3)和[我的项目](https://file.niuzhaohang.top/mp3/lizhi/CDN/pwd)。

你需要做的只是**修改**index.php里的谷歌验证码密钥和recaptcha.js里的谷歌验证码网站密钥，然后根据本Demo中<code>echo</code>的不同的结果来结合进你的项目即可。

注意的是这里面必须要预留一个属性为"hidden"的<code>\<input\></code>，好让谷歌验证码的脚本生成一个验证码。

一般情况的思路是验证 谷歌验证码正确获取->谷歌验证码得分达到预期分数->查询数据库->返回结果，切忌验证码和数据库查询同时进行，那样验证码就会失效，实现方法也很简单，不多赘述。



# **English Version:**

This is a test Demo of  **Google reCaptcha V3**, here are [my Demo](https://demo.niuzhaohang.top/googlerecaptchav3) and [my project](https://file.niuzhaohang.top/mp3/lizhi/CDN/pwd).

 All you need to do is just **modify** the Google reCaptcha secret in **index.php** and the Google reCaptcha Sitekey in **recaptcha.js**, and then change what you want according to the results in <code>echo</code> in my Demo. It can be easily incorporated into your project.

You should notice that an attribute of "hidden" <code>\<input\></code>  must be reserved so that the <code><script></code> of Google reCaptcha can generate a Verification Code.

The general idea is to verify The correct acquisition of the Google reCaptcha - > The score of the Google reCaptcha reaches the expected score - > Query the database - > Return the results, you should avoid checking the reCaptcha and querying database at the same time, or the reCaptcha will be invalid, the implementation method is also simple, not to mention much.
