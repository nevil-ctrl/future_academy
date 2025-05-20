 <div class="profile-container">
    <div class="profile-header">
      <img src="assets\img\png\fanny.jpg" alt="Аватар" class="avatar" />
      <div>
        <div class="name">Иван Петров</div>
        <div class="role">Фронтенд-разработчик</div>
        <div class="info">
          Участник с: январь 2024<br />
          Email: <a href="mailto:ivan@example.com">ivan@example.com</a>
        </div>
        <div class="buttons">
          <a href="#" class="btn btn-primary">Редактировать</a>
          <a href="#" class="btn btn-secondary">Настройки</a>
        </div>
      </div>
    </div>

    <div class="courses">
      <h2>Мои курсы</h2>

      <div class="course">
        <div class="course-title">HTML и CSS с нуля</div>
        <div class="progress-bar">
          <div class="progress-fill" style="width: 80%;"></div>
        </div>
      </div>

      <div class="course">
        <div class="course-title">JavaScript для начинающих</div>
        <div class="progress-bar">
          <div class="progress-fill" style="width: 45%;"></div>
        </div>
      </div>

    </div>
    <a href="/signout">Выйти</a>
  </div>
  <style>
        .profile-container {
      max-width: 720px;
      margin: 0 auto;
      background: var(--white);
      border-radius: var(--radius);
      box-shadow: 0 6px 20px rgba(0,0,0,0.06);
      padding: 32px;
    }

    .profile-header {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .avatar {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 16px;
      box-shadow: 0 0 0 4px var(--light-border);
    }

    .name {
      font-size: 1.6rem;
      font-weight: 600;
    }

    .role {
      color: var(--gray);
      margin-top: 4px;
    }

    .info {
      margin-top: 16px;
      font-size: 0.95rem;
      color: var(--gray);
    }

    .buttons {
      margin-top: 20px;
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .btn {
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 10px;
      font-weight: 500;
      font-size: 0.95rem;
      transition: 0.2s ease;
      border: 1px solid transparent;
    }

    .btn-primary {
      background-color: var(--accent);
      color: white;
    }

    .btn-primary:hover {
      background-color: #1e40af;
    }

    .btn-secondary {
      background-color: #f3f4f6;
      color: var(--text);
      border: 1px solid var(--light-border);
    }

    .btn-secondary:hover {
      background-color: #e5e7eb;
    }

    .courses {
      margin-top: 40px;
    }

    .courses h2 {
      font-size: 1.2rem;
      margin-bottom: 16px;
    }

    .course {
      background: #f9fafb;
      border: 1px solid var(--light-border);
      padding: 16px;
      border-radius: 10px;
      margin-bottom: 16px;
    }

    .course-title {
      font-weight: 600;
      margin-bottom: 6px;
    }

    .progress-bar {
      height: 8px;
      background-color: #e5e7eb;
      border-radius: 4px;
      overflow: hidden;
    }

    .progress-fill {
      height: 100%;
      border-radius: 4px;
      background-color: var(--accent);
      width: 0%;
      transition: width 0.3s ease;
    }

    @media (min-width: 600px) {
      .profile-header {
        flex-direction: row;
        align-items: center;
        text-align: left;
        gap: 24px;
      }

      .profile-header .info {
        margin-top: 8px;
      }

      .buttons {
        justify-content: flex-start;
      }
    }
  </style>