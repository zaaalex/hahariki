CREATE TABLE b_hahariki_session
(
	ID int,
	STATUS int,
	OWNER_ID int,
	STAGE int,
	END_STAGE_TIME timestamp
);

CREATE TABLE b_hahariki_session_user
(
	USER_ID int,
	SESSION_ID int
);

CREATE TABLE b_hahariki_session_status
(
	ID int,
	TITLE varchar(20)
);

CREATE TABLE b_hahariki_anekdot
(
	ID int,
	SESSION_ID int,
	CATEGORY varchar(100)
);

CREATE TABLE b_hahariki_anekdot_part
(
	ID int,
	TEXT varchar(200),
	AUTHOR_ID int,
	PARENT_ID int NULL
);

ALTER TABLE b_hahariki_anekdot_part
ADD ANEKDOT_ID int;