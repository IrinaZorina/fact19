<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Форма регистрации</title>
</head>

<body>
  <h2>Работа с формами</h2>

  <form action="#" method="post">
    <label for="username">Имя пользователя:</label>
    <input type="text" id="username" name="username" />

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required />

    <label for="what">Что я хочу выучить?</label>
    <select id="what" name="what">
      <option value="">--Выберите--</option>
      <option value="html">HTML</option>
      <option value="css">CSS</option>
      <option value="js">JavaScript</option>
    </select>

    <fieldset>
      <legend>Хочу быть...</legend>
      <input type="radio" id="junior" name="role" value="junior" />
      <label for="junior">Junior PHP Developer</label>

      <input type="radio" id="middle" name="role" value="middle" />
      <label for="middle">Middle PHP Developer</label>

      <input type="radio" id="frontend" name="role" value="frontend" />
      <label for="frontend">Front-end разработчик</label>

      <input type="radio" id="designer" name="role" value="designer" />
      <label for="designer">Не-е-е, хочу быть дизайнером</label>
    </fieldset>

    <fieldset>
      <legend>Мои навыки в программировании</legend>
      <input type="checkbox" id="god" name="skills" value="god" />
      <label for="god">Бог программирования</label>

      <input type="checkbox" id="guru" name="skills" value="guru" />
      <label for="guru">Гуру программирования</label>

      <input type="checkbox" id="learning" name="skills" value="learning" />
      <label for="learning">Эм... я еще учусь</label>
    </fieldset>

    <label for="time">Во сколько мне удобно приходить на занятия?</label>
    <input type="time" id="time" name="time" />

    <label for="comments">Мои пожелания и комментарии по курсам:</label>
    <textarea id="comments" name="comments" rows="4" cols="50"></textarea>

    <button type="submit">Всё, я справился с заполнением формы</button>
  </form>
</body>

</html>