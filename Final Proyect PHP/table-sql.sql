CREATE table admfinalproject(
                            id int not null auto_increment,
                            first_name varchar (255),
                            last_name varchar (255),
                            age varchar(255),
                            email varchar(255),
                            username varchar (255),
                            password varchar (255),
                            primary key (user_id)
);

CREATE TABLE imagesgallery(
                           id int(11) NOT NULL AUTO_INCREMENT,
                           name varchar(100) NOT NULL,
                           image varchar(255) NOT NULL,
                           PRIMARY KEY (id)
);

CREATE TABLE instock(
                        id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        price varchar(100) NOT NULL,
                        size_picture varchar(100) NOT NULL,
                        date_add varchar(100) NOT NULL,
                        resolution varchar(100) NOT NULL
);