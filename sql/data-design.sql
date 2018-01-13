DROP TABLE IF EXISTS clap;
DROP TABLE IF EXISTS blog;
DROP TABLE IF EXISTS profile;

ALTER DATABASE imartinez32_CHANGE_ME CHARACTER SET utf8 COLLATE utf8_unicode_ci;
CREATE TABLE profile (
profileId BINARY(16) NOT NULL,
profileActivationToken CHAR (32),
profileAtHandle VARCHAR(32) NOT NULL,
profileEmail VARCHAR(128) NOT NULL,
profileHash CHAR(128) NOT NULL,
profilePhone VARCHAR(32),
profileSalt CHAR(64) NOT NULL,
UNIQUE(profileAtHandle),
UNIQUE(profileEmail),
PRIMARY KEY(profileId)
);

CREATE TABLE blog (
blogId BINARY(16) NOT NULL,
blogProfileId BINARY(16) NOT NULL,
blogContent VARCHAR(140) NOT NULL,
blogDate DATETIME(6) NOT NULL,
INDEX(blogProfileId),
FOREIGN KEY(blogProfileId) REFERENCES profile(profileId),
PRIMARY KEY(blogId)
);

CREATE TABLE clap (
clapProfileId BINARY(16) NOT NULL,
clapBlogId BINARY(16) NOT NULL,
clapDate DATETIME(6) NOT NULL,
INDEX(clapProfileId),
INDEX(clapBlogId),
FOREIGN KEY(clapProfileId) REFERENCES profile(profileId),
FOREIGN KEY(clapBlogId) REFERENCES blog(blogId),
PRIMARY key(clapProfileId, clapBlogId)
);