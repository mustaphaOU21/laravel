CREATE DATABASE planets;
USE planets;


CREATE TABLE planeten (
	id int not null primary key auto_increment,
    name varchar(255),
    description text,
    size_in_km int
);

insert into planeten (name, description)
Value
("Mars", "Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury."),
("Venus", "Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty."),
("Earth", "Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things."),
("Jupiter", "Jupiter is a gas giant and doesn't have a solid surface, but it may have a solid inner core about the size of Earth.");
select * from planeten;