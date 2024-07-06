CREATE TABLE b_hahariki_session
(
	ID int auto_increment,
	STATUS int,
	OWNER_ID int,
	STAGE int,
	END_STAGE_TIME timestamp,
	primary key (ID)
);

CREATE TABLE b_hahariki_session_user
(
	USER_ID int,
	SESSION_ID int,
	primary key (USER_ID, SESSION_ID)
);

CREATE TABLE b_hahariki_session_status
(
	ID int auto_increment,
	TITLE varchar(20),
	primary key (ID)
);

CREATE TABLE b_hahariki_anekdot
(
	ID int auto_increment,
	SESSION_ID int,
	CATEGORY varchar(100),
	primary key (ID)
);

CREATE TABLE b_hahariki_anekdot_part
(
	ID int auto_increment,
	TEXT varchar(200),
	AUTHOR_ID int,
	PARENT_ID int NULL,
	primary key (ID)
);

ALTER TABLE b_hahariki_anekdot_part
ADD ANEKDOT_ID int;

ALTER TABLE b_hahariki_anekdot_part
	ADD SORT int;