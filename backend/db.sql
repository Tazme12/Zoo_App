/*CREATE DATABASE login_system (
    id int PRIMARY KEY AUTO_INCREMENT,
    email text NOT NULL,
    username text NOT NULL,
    password text NOT NULL
    );

    CREATE TABLE users(
        user_id int,
        email text,
        username text,
        password text,
        PRIMARY KEY (user_id),
        FOREIGN KEY (user_id) REFERENCES login_system(id),
        FOREIGN KEY (email) REFERENCES login_system(email),
        FOREIGN KEY (username) REFERENCES login_system(username),
        FOREIGN KEY (password) REFERENCES login_system(password)
    ); */